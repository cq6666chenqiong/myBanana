<?php
namespace Org\OrgBundle\Controller;

use Topxia\Common\TreeToolkit;
use Topxia\Common\ArrayToolkit;
use Symfony\Component\HttpFoundation\Request;
use Topxia\AdminBundle\Controller\BaseController;

class OrgManageController extends BaseController
{
    public function indexAction(Request $request)
    {
        $orgs = $this->getOrgService()->findOrgsStartByOrgCode();

        $treeOrgs     = TreeToolkit::makeTree($orgs, 'seq');
        $userIds      = ArrayToolkit::column($orgs, 'createdUserId');
        $createdUsers = $this->getUserService()->findUsersByIds($userIds);

        return $this->render('OrgBundle:OrgManage:index.html.twig', array(
            'orgs'         => $treeOrgs,
            'createdUsers' => $createdUsers
        ));
    }

    public function createAction(Request $request)
    {
        if ($request->getMethod() == 'POST') {
            $org = $request->request->all();
            $this->getOrgService()->createOrg($org);
            return $this->redirect($this->generateUrl('admin_org'));
        }

        $parentId = $request->query->get('parentId', 0);
        $org      = array('parentId' => $parentId);
        return $this->render('OrgBundle:OrgManage:modal.html.twig', array('org' => $org));
    }

    public function updateAction(Request $request, $id)
    {
        if ($request->getMethod() == 'POST') {
            $org = $request->request->all();
            $this->getOrgService()->updateOrg($id, $org);
            return $this->redirect($this->generateUrl('admin_org'));
        }

        $org = $this->getOrgService()->getOrg($id);
        return $this->render('OrgBundle:OrgManage:modal.html.twig', array(
            'org' => $org
        ));
    }

    public function deleteAction(Request $request, $id)
    {
        $this->getOrgService()->deleteOrg($id);
        return $this->createJsonResponse(true);
    }

    public function checkCodeAction(Request $request)
    {
        $value   = $request->query->get('value');
        $exclude = $request->query->get('exclude');

        $isAvaliable = $this->getOrgService()->isCodeAvaliable($value, $exclude);

        if ($isAvaliable) {
            $response = array('success' => true, 'message' => '');
        } else {
            $response = array('success' => false, 'message' => '编码已被占用,请换一个');
        }

        return $this->createJsonResponse($response);
    }

    public function sortAction(Request $request)
    {
        $ids = $request->request->get('ids');
        $this->getOrgService()->sortOrg($ids);
        return $this->createJsonResponse(true);
    }

    protected function getOrgService()
    {
        return $this->getServiceKernel()->createService('Org:Org.OrgService');
    }
}
