<?php 
return array (
  'event_subscriber' => 
  array (
    0 => 'Classroom\\Service\\Classroom\\Event\\ClassroomEventSubscriber',
    1 => 'Topxia\\Service\\Sms\\Event\\SmsEventSubscriber',
    2 => 'Topxia\\Service\\PostFilter\\Event\\TokenBucketEventSubscriber',
    3 => 'Topxia\\Service\\Taxonomy\\Event\\TagEventSubscriber',
    4 => 'Topxia\\Service\\Task\\Event\\TaskEventSubscriber',
    5 => 'Topxia\\Service\\Course\\Event\\CourseEventSubscriber',
    6 => 'Topxia\\Service\\Course\\Event\\CourseLessonEventSubscriber',
    7 => 'Topxia\\Service\\Course\\Event\\CourseMaterialEventSubscriber',
    8 => 'Topxia\\Service\\Testpaper\\Event\\TestpaperEventSubscriber',
    9 => 'Topxia\\Service\\Card\\Event\\EventSubscriber',
    10 => 'Topxia\\Service\\Thread\\Event\\ThreadEventSubscriber',
    11 => 'Topxia\\Service\\Notification\\PushMessageEventSubscriber',
    12 => 'Topxia\\Service\\Question\\Event\\QuestionEventSubscriber',
    13 => 'Topxia\\Service\\User\\Event\\UserEventSubscriber',
    14 => 'Topxia\\Service\\User\\Event\\MessageEventSubscriber',
    15 => 'Topxia\\Service\\User\\Event\\OrderEventSubscriber',
    16 => 'Topxia\\Service\\User\\Event\\StatusEventSubscriber',
    17 => 'Topxia\\Service\\File\\Event\\UploadFileEventSubscriber',
    18 => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
  ),
  'thread.event_processor' => 
  array (
    'classroom' => 'Classroom\\Service\\Classroom\\Event\\ClassroomThreadEventProcessor',
    'article' => 'Topxia\\Service\\Article\\Event\\ArticleEventSubscriber',
  ),
);