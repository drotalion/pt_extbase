<?php

/*********************************************************************
* Extension configuration file for ext "pt_extbase".
*
* Generated by ext 17-02-2015 18:13 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array(
  'title' => 'Tools for Extbase development',
  'description' => 'Collection of tools for Extbase Extension development.',
  'category' => 'misc',
  'author' => 'Michael Knoll,Daniel Lienert',
  'author_email' => 'knoll@punkt.de,lienert@punkt.de',
  'author_company' => 'punkt.de GmbH,punkt.de GmbH',
  'shy' => '',
  'dependencies' => 'extbase,fluid',
  'conflicts' => '',
  'priority' => '',
  'module' => '',
  'state' => 'stable',
  'internal' => '',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'lockType' => '',
  'version' => '2.1.0',
  'constraints' =>
  array(
    'depends' =>
    array(
      'typo3' => '6.2.0-8.0.99',
    ),
    'conflicts' =>
    array(
    ),
    'suggests' =>
    array(
    ),
  ),
  'suggests' =>
  array(
  ),
  '_md5_values_when_last_written' => 'a:284:{s:16:"ext_autoload.php";s:4:"e48c";s:12:"ext_icon.gif";s:4:"5837";s:17:"ext_localconf.php";s:4:"e2df";s:14:"ext_tables.php";s:4:"c193";s:14:"ext_tables.sql";s:4:"d9ff";s:21:"ExtensionBuilder.json";s:4:"0bfa";s:19:"Classes/Context.php";s:4:"3208";s:28:"Classes/ContextInterface.php";s:4:"859b";s:15:"Classes/Div.php";s:4:"0b75";s:29:"Classes/Assertions/Assert.php";s:4:"9ae5";s:33:"Classes/Collection/Collection.php";s:4:"19b5";s:39:"Classes/Collection/ObjectCollection.php";s:4:"aabe";s:46:"Classes/Collection/SortableEntityInterface.php";s:4:"5fc2";s:47:"Classes/Collection/SortableObjectCollection.php";s:4:"24dc";s:47:"Classes/Compatibility/Core/ExtensionManager.php";s:4:"54aa";s:47:"Classes/Compatibility/Extbase/Service/Cache.php";s:4:"4fc3";s:52:"Classes/Compatibility/Extbase/Service/TypoScript.php";s:4:"9ddf";s:51:"Classes/Compatibility/Extbase/Utility/Extension.php";s:4:"fc8b";s:47:"Classes/Configuration/AbstractConfiguration.php";s:4:"3628";s:54:"Classes/Configuration/AbstractConfigurationBuilder.php";s:4:"80a3";s:47:"Classes/Controller/AbstractActionController.php";s:4:"25db";s:37:"Classes/Controller/TreeController.php";s:4:"db6d";s:29:"Classes/Domain/Model/Page.php";s:4:"91ea";s:36:"Classes/Domain/Model/SysLanguage.php";s:4:"4d42";s:34:"Classes/Domain/Model/TTContent.php";s:4:"d599";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"c134";s:44:"Classes/Domain/Repository/PageRepository.php";s:4:"6a44";s:51:"Classes/Domain/Repository/SysLanguageRepository.php";s:4:"8c2e";s:49:"Classes/Domain/Repository/TTContentRepository.php";s:4:"7451";s:51:"Classes/Domain/Validator/CaptchaStringValidator.php";s:4:"4543";s:31:"Classes/Exception/Assertion.php";s:4:"79bd";s:44:"Classes/Exception/ConfigurationException.php";s:4:"3daa";s:31:"Classes/Exception/Exception.php";s:4:"bdd1";s:30:"Classes/Exception/Internal.php";s:4:"0fb9";s:42:"Classes/Extbase/AbstractExtbaseContext.php";s:4:"4416";s:36:"Classes/Lifecycle/EventInterface.php";s:4:"e555";s:33:"Classes/Lifecycle/HookManager.php";s:4:"ce8b";s:29:"Classes/Lifecycle/Manager.php";s:4:"d654";s:37:"Classes/Logger/Backend/FileWriter.php";s:4:"94e9";s:44:"Classes/Logger/Processor/FormatProcessor.php";s:4:"7fa5";s:32:"Classes/Object/ObjectManager.php";s:4:"5782";s:48:"Classes/Parser/Sql/MultipleQueriesFileParser.php";s:4:"72cc";s:32:"Classes/Rbac/AllowAllService.php";s:4:"c4fc";s:28:"Classes/Rbac/RbacService.php";s:4:"c9a5";s:37:"Classes/Rbac/RbacServiceInterface.php";s:4:"068f";s:38:"Classes/Rbac/TypoScriptRbacService.php";s:4:"60df";s:29:"Classes/Registry/Registry.php";s:4:"ebba";s:45:"Classes/Scheduler/SqlRunner/SqlRunnerTask.php";s:4:"1b10";s:61:"Classes/Scheduler/SqlRunner/SqlRunnerTaskAdditionalFields.php";s:4:"db71";s:49:"Classes/Service/AbstractHashFileSystemService.php";s:4:"0391";s:41:"Classes/Service/HashFileSystemService.php";s:4:"7bcf";s:33:"Classes/SignalSlot/Dispatcher.php";s:4:"2048";s:53:"Classes/SignalSlot/Exception/InvalidSlotException.php";s:4:"66e8";s:44:"Classes/SqlGenerator/PhpFileSqlGenerator.php";s:4:"5c9f";s:44:"Classes/SqlGenerator/SqlFileSqlGenerator.php";s:4:"b6a2";s:37:"Classes/SqlGenerator/SqlGenerator.php";s:4:"20d6";s:53:"Classes/SqlGenerator/SqlGeneratorCommandInterface.php";s:4:"1be4";s:46:"Classes/SqlGenerator/SqlGeneratorInterface.php";s:4:"9690";s:69:"Classes/SqlGenerator/Generator/AbstractTemporaryTablePhpGenerator.php";s:4:"b89c";s:40:"Classes/SqlRunner/SqlRunnerInterface.php";s:4:"de4a";s:36:"Classes/SqlRunner/Typo3SqlRunner.php";s:4:"14ee";s:39:"Classes/State/IdentifiableInterface.php";s:4:"989c";s:38:"Classes/State/GpVars/GpVarsAdapter.php";s:4:"903e";s:45:"Classes/State/GpVars/GpVarsAdapterFactory.php";s:4:"8893";s:50:"Classes/State/GpVars/GpVarsInjectableInterface.php";s:4:"58a4";s:53:"Classes/State/Session/SessionPersistableInterface.php";s:4:"5946";s:51:"Classes/State/Session/SessionPersistenceManager.php";s:4:"495b";s:58:"Classes/State/Session/SessionPersistenceManagerBuilder.php";s:4:"fcf7";s:58:"Classes/State/Session/SessionPersistenceManagerFactory.php";s:4:"3ffc";s:50:"Classes/State/Session/Storage/AdapterInterface.php";s:4:"72b3";s:43:"Classes/State/Session/Storage/DBAdapter.php";s:4:"9831";s:50:"Classes/State/Session/Storage/DBAdapterFactory.php";s:4:"61db";s:54:"Classes/State/Session/Storage/FeUserSessionAdapter.php";s:4:"c98d";s:52:"Classes/State/Session/Storage/NullStorageAdapter.php";s:4:"f6f2";s:48:"Classes/State/Session/Storage/SessionAdapter.php";s:4:"b4b1";s:38:"Classes/Testing/Database/Bootstrap.php";s:4:"e11b";s:48:"Classes/Testing/FixtureFramework/Credentials.php";s:4:"d076";s:53:"Classes/Testing/FixtureFramework/DatabaseTestCase.php";s:4:"99c8";s:44:"Classes/Testing/FixtureFramework/Fixture.php";s:4:"5dca";s:52:"Classes/Testing/FixtureFramework/FixtureImporter.php";s:4:"6f74";s:51:"Classes/Testing/FixtureFramework/SchemaImporter.php";s:4:"4449";s:54:"Classes/Testing/FixtureFramework/Selenium2TestCase.php";s:4:"bd06";s:53:"Classes/Testing/FixtureFramework/SeleniumTestCase.php";s:4:"2a09";s:42:"Classes/Testing/Selenium/BaseFramework.php";s:4:"2455";s:44:"Classes/Testing/Selenium/Backend/Modules.php";s:4:"53b6";s:45:"Classes/Testing/Selenium/Backend/Security.php";s:4:"71c5";s:58:"Classes/Testing/Selenium/FixtureFramework/BaseTestcase.php";s:4:"c84d";s:53:"Classes/Testing/Selenium/FixtureFramework/Fixture.php";s:4:"3a6d";s:108:"Classes/Testing/Selenium/FixtureFramework/Tx_PtExtbase_Testing_Selenium_FixtureFramework_FixtureImporter.php";s:4:"bdeb";s:32:"Classes/Tree/ArrayTreeWriter.php";s:4:"5e1f";s:35:"Classes/Tree/ArrayWriterVisitor.php";s:4:"64b2";s:36:"Classes/Tree/ExtJsJsonTreeWriter.php";s:4:"c877";s:39:"Classes/Tree/ExtJsJsonWriterVisitor.php";s:4:"be2e";s:31:"Classes/Tree/JsonTreeWriter.php";s:4:"4023";s:37:"Classes/Tree/JSTreeJsonTreeWriter.php";s:4:"cb5a";s:40:"Classes/Tree/JSTreeJsonWriterVisitor.php";s:4:"da90";s:39:"Classes/Tree/NestedSetNodeInterface.php";s:4:"9182";s:39:"Classes/Tree/NestedSetTreeInterface.php";s:4:"7acc";s:37:"Classes/Tree/NestedSetTreeStorage.php";s:4:"e4bb";s:36:"Classes/Tree/NestedSetTreeWalker.php";s:4:"b0bc";s:33:"Classes/Tree/NestedSetVisitor.php";s:4:"4ea3";s:21:"Classes/Tree/Node.php";s:4:"398f";s:30:"Classes/Tree/NodeInterface.php";s:4:"dc4a";s:32:"Classes/Tree/NodePathBuilder.php";s:4:"07a7";s:31:"Classes/Tree/NodeRepository.php";s:4:"45df";s:40:"Classes/Tree/NodeRepositoryInterface.php";s:4:"1d33";s:22:"Classes/Tree/Stack.php";s:4:"d770";s:38:"Classes/Tree/TcaTreeSelectorWidget.php";s:4:"858e";s:37:"Classes/Tree/TraversableInterface.php";s:4:"7afe";s:21:"Classes/Tree/Tree.php";s:4:"bf86";s:28:"Classes/Tree/TreeBuilder.php";s:4:"293b";s:37:"Classes/Tree/TreeBuilderInterface.php";s:4:"2238";s:28:"Classes/Tree/TreeContext.php";s:4:"d70a";s:30:"Classes/Tree/TreeInterface.php";s:4:"0a2c";s:31:"Classes/Tree/TreeRepository.php";s:4:"54d1";s:38:"Classes/Tree/TreeRepositoryBuilder.php";s:4:"02aa";s:37:"Classes/Tree/TreeStorageInterface.php";s:4:"bcb1";s:27:"Classes/Tree/TreeWalker.php";s:4:"9114";s:43:"Classes/Tree/TreeWalkerVisitorInterface.php";s:4:"560c";s:37:"Classes/Utility/AbstractTcaWidget.php";s:4:"50b3";s:34:"Classes/Utility/AjaxDispatcher.php";s:4:"454b";s:48:"Classes/Utility/ConstantToSpeakingNameMapper.php";s:4:"4e3d";s:31:"Classes/Utility/DateService.php";s:4:"b2eb";s:33:"Classes/Utility/eIDDispatcher.php";s:4:"184f";s:37:"Classes/Utility/ExtensionSettings.php";s:4:"863f";s:39:"Classes/Utility/FakeFrontendFactory.php";s:4:"f552";s:36:"Classes/Utility/FeBeModeDetector.php";s:4:"ebc5";s:25:"Classes/Utility/Files.php";s:4:"ffe5";s:35:"Classes/Utility/HeaderInclusion.php";s:4:"f893";s:41:"Classes/Utility/HierarchicalMenuCache.php";s:4:"b000";s:29:"Classes/Utility/NameSpace.php";s:4:"dad5";s:23:"Classes/Utility/Tca.php";s:4:"162e";s:29:"Classes/Utility/UserAgent.php";s:4:"58e9";s:32:"Classes/Utility/UserDetector.php";s:4:"e692";s:25:"Classes/View/BaseView.php";s:4:"16e9";s:41:"Classes/ViewHelpers/CaptchaViewHelper.php";s:4:"0057";s:47:"Classes/ViewHelpers/CObjectConfigViewHelper.php";s:4:"db86";s:41:"Classes/ViewHelpers/CommentViewHelper.php";s:4:"0dd0";s:47:"Classes/ViewHelpers/ErrorMessagesViewHelper.php";s:4:"5556";s:41:"Classes/ViewHelpers/ExplodeViewHelper.php";s:4:"1a80";s:47:"Classes/ViewHelpers/FlashMessagesViewHelper.php";s:4:"9ceb";s:48:"Classes/ViewHelpers/IfValueChangesViewHelper.php";s:4:"8628";s:41:"Classes/ViewHelpers/ImplodeViewHelper.php";s:4:"7e53";s:45:"Classes/ViewHelpers/LanguageKeyViewHelper.php";s:4:"cd14";s:48:"Classes/ViewHelpers/MergeArgumentsViewHelper.php";s:4:"d13d";s:50:"Classes/ViewHelpers/RequestArgumentsViewHelper.php";s:4:"0daf";s:43:"Classes/ViewHelpers/ShortLinkViewHelper.php";s:4:"ac53";s:47:"Classes/ViewHelpers/TwoClickShareViewHelper.php";s:4:"633e";s:46:"Classes/ViewHelpers/Be/FormTokenViewHelper.php";s:4:"6a00";s:41:"Classes/ViewHelpers/Be/IconViewHelper.php";s:4:"4ecf";s:49:"Classes/ViewHelpers/Be/Buttons/IconViewHelper.php";s:4:"5b60";s:52:"Classes/ViewHelpers/Content/RenderPageViewHelper.php";s:4:"27a8";s:45:"Classes/ViewHelpers/Form/SelectViewHelper.php";s:4:"f4d6";s:45:"Classes/ViewHelpers/Form/SliderViewHelper.php";s:4:"c868";s:48:"Classes/ViewHelpers/Format/CssNameViewHelper.php";s:4:"0665";s:59:"Classes/ViewHelpers/Format/FileSizeFromNumberViewHelper.php";s:4:"c69a";s:49:"Classes/ViewHelpers/Format/FileSizeViewHelper.php";s:4:"7944";s:50:"Classes/ViewHelpers/Format/HighlightViewHelper.php";s:4:"a87e";s:57:"Classes/ViewHelpers/Format/RemoveLineBreaksViewHelper.php";s:4:"0f67";s:64:"Classes/ViewHelpers/Format/RemoveSpacesBetweenTagsViewHelper.php";s:4:"8c1d";s:54:"Classes/ViewHelpers/Format/StringToLowerViewHelper.php";s:4:"be4b";s:50:"Classes/ViewHelpers/Format/TimestampViewHelper.php";s:4:"7819";s:50:"Classes/ViewHelpers/Format/UrlencodeViewHelper.php";s:4:"8434";s:43:"Classes/ViewHelpers/Head/LinkViewHelper.php";s:4:"5707";s:43:"Classes/ViewHelpers/Head/MetaViewHelper.php";s:4:"fed4";s:53:"Classes/ViewHelpers/Javascript/TemplateViewHelper.php";s:4:"9265";s:48:"Classes/ViewHelpers/Rbac/HasAccessViewHelper.php";s:4:"0303";s:50:"Classes/ViewHelpers/Tree/ManipulatorViewHelper.php";s:4:"5a10";s:43:"Classes/ViewHelpers/Tree/PathViewHelper.php";s:4:"8c73";s:47:"Classes/ViewHelpers/Tree/SelectorViewHelper.php";s:4:"c961";s:45:"Classes/ViewHelpers/Uri/CurrentViewHelper.php";s:4:"5c95";s:26:"Configuration/TCA/Node.php";s:4:"a07d";s:38:"Configuration/TypoScript/constants.txt";s:4:"1d06";s:34:"Configuration/TypoScript/setup.txt";s:4:"9531";s:24:"Documentation/Manual.pdf";s:4:"53d0";s:30:"Documentation/En/ChangeLog.rst";s:4:"f5e5";s:26:"Documentation/En/Index.rst";s:4:"1318";s:56:"Documentation/En/SystemDocumentationExampleStructure.rst";s:4:"42a9";s:32:"Documentation/En/Admin/Index.rst";s:4:"9c9a";s:44:"Documentation/En/Admin/Integration/Index.rst";s:4:"1000";s:61:"Documentation/En/Admin/Integration/ExtensionManager/Index.rst";s:4:"af80";s:52:"Documentation/En/Admin/Integration/Modules/Index.rst";s:4:"d41d";s:52:"Documentation/En/Admin/Integration/Plugins/Index.rst";s:4:"98c0";s:54:"Documentation/En/Admin/Integration/Scheduler/Index.rst";s:4:"d7a1";s:55:"Documentation/En/Admin/Integration/TypoScript/Index.rst";s:4:"2251";s:41:"Documentation/En/Developer/Assertions.rst";s:4:"531a";s:44:"Documentation/En/Developer/Configuration.rst";s:4:"f842";s:41:"Documentation/En/Developer/Controller.rst";s:4:"7545";s:36:"Documentation/En/Developer/Index.rst";s:4:"9a61";s:43:"Documentation/En/Developer/SqlGenerator.png";s:4:"1163";s:43:"Documentation/En/Developer/SqlGenerator.rst";s:4:"e202";s:38:"Documentation/En/Developer/Utility.rst";s:4:"aa7a";s:50:"Documentation/En/Developer/ClassDiagrams/Index.rst";s:4:"41c8";s:45:"Documentation/En/Developer/Database/Index.rst";s:4:"6b52";s:47:"Documentation/En/Developer/ViewHelper/Index.rst";s:4:"e74a";s:34:"Documentation/En/General/Index.rst";s:4:"8e56";s:36:"Documentation/En/Interface/Index.rst";s:4:"fdf9";s:54:"Resources/Private/JSTemplates/Tree/ManipulationTree.js";s:4:"a66a";s:48:"Resources/Private/JSTemplates/Tree/SelectTree.js";s:4:"44c9";s:57:"Resources/Private/JSTemplates/Tree/TreeManipulationExt.js";s:4:"7713";s:40:"Resources/Private/Language/locallang.xml";s:4:"d8d9";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"f9cc";s:44:"Resources/Private/Templates/Debug/Debug.html";s:4:"e259";s:73:"Resources/Private/Templates/Scheduler/SqlRunner/TaskAdditionalFields.html";s:4:"eb2f";s:45:"Resources/Private/Templates/Tca/TcaDebug.html";s:4:"0bb2";s:41:"Resources/Private/Templates/Tca/Tree.html";s:4:"28c2";s:32:"Resources/Public/CSS/Backend.css";s:4:"cae3";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:60:"Resources/Public/JavaScript/jquery.socialshareprivacy.min.js";s:4:"b94d";s:40:"Resources/Public/jstree/jquery.cookie.js";s:4:"c840";s:40:"Resources/Public/jstree/jquery.jstree.js";s:4:"83c7";s:43:"Resources/Public/jstree/themes/apple/bg.jpg";s:4:"eb12";s:42:"Resources/Public/jstree/themes/apple/d.png";s:4:"84c5";s:51:"Resources/Public/jstree/themes/apple/dot_for_ie.gif";s:4:"8c30";s:46:"Resources/Public/jstree/themes/apple/style.css";s:4:"972f";s:49:"Resources/Public/jstree/themes/apple/throbber.gif";s:4:"7b97";s:44:"Resources/Public/jstree/themes/classic/d.gif";s:4:"e59b";s:44:"Resources/Public/jstree/themes/classic/d.png";s:4:"6519";s:53:"Resources/Public/jstree/themes/classic/dot_for_ie.gif";s:4:"8c30";s:48:"Resources/Public/jstree/themes/classic/style.css";s:4:"5a52";s:51:"Resources/Public/jstree/themes/classic/throbber.gif";s:4:"7b97";s:44:"Resources/Public/jstree/themes/default/d.gif";s:4:"25d6";s:44:"Resources/Public/jstree/themes/default/d.png";s:4:"0eb5";s:48:"Resources/Public/jstree/themes/default/style.css";s:4:"87b4";s:51:"Resources/Public/jstree/themes/default/throbber.gif";s:4:"7b97";s:48:"Resources/Public/jstree/themes/default-rtl/d.gif";s:4:"e3fb";s:48:"Resources/Public/jstree/themes/default-rtl/d.png";s:4:"d6f6";s:51:"Resources/Public/jstree/themes/default-rtl/dots.gif";s:4:"3ce3";s:52:"Resources/Public/jstree/themes/default-rtl/style.css";s:4:"d26c";s:55:"Resources/Public/jstree/themes/default-rtl/throbber.gif";s:4:"7b97";s:23:"Tests/DebugCodeTest.php";s:4:"c658";s:54:"Tests/Functional/Service/HashFileSystemServiceTest.php";s:4:"f352";s:44:"Tests/Functional/Tree/JsonTreeWriterTest.php";s:4:"b09a";s:28:"Tests/Selenium/TreeClickTest";s:4:"aa72";s:31:"Tests/Unit/AbstractBaseTest.php";s:4:"88dc";s:32:"Tests/Unit/AbstractModelTest.php";s:4:"01a6";s:36:"Tests/Unit/Assertions/AssertTest.php";s:4:"4ba0";s:46:"Tests/Unit/Collection/ObjectCollectionTest.php";s:4:"2c9d";s:54:"Tests/Unit/Collection/SortableObjectCollectionTest.php";s:4:"612a";s:61:"Tests/Unit/Configuration/AbstractConfigurationBuilderTest.php";s:4:"6561";s:54:"Tests/Unit/Configuration/AbstractConfigurationTest.php";s:4:"e7fd";s:54:"Tests/Unit/Controller/AbstractActionControllerTest.php";s:4:"b8f6";s:40:"Tests/Unit/Lifecycle/HookManagerTest.php";s:4:"f572";s:36:"Tests/Unit/Lifecycle/ManagerTest.php";s:4:"f879";s:55:"Tests/Unit/Parser/Sql/MultipleQueriesFileParserTest.php";s:4:"498f";s:39:"Tests/Unit/Rbac/AllowAllServiceTest.php";s:4:"8b84";s:45:"Tests/Unit/Rbac/TypoScriptRbacServiceTest.php";s:4:"d64d";s:51:"Tests/Unit/SqlGenerator/PhpFileSqlGeneratorTest.php";s:4:"1336";s:44:"Tests/Unit/SqlGenerator/SqlGeneratorTest.php";s:4:"6528";s:45:"Tests/Unit/State/GpVars/GpVarsAdapterTest.php";s:4:"9667";s:65:"Tests/Unit/State/Session/SessionPersistenceManagerBuilderTest.php";s:4:"ba5f";s:65:"Tests/Unit/State/Session/SessionPersistenceManagerFactoryTest.php";s:4:"7835";s:58:"Tests/Unit/State/Session/SessionPersistenceManagerTest.php";s:4:"5aff";s:57:"Tests/Unit/State/Session/Storage/DBAdapterFactoryTest.php";s:4:"c964";s:50:"Tests/Unit/State/Session/Storage/DBAdapterTest.php";s:4:"1e63";s:61:"Tests/Unit/State/Session/Storage/FeUserSessionAdapterTest.php";s:4:"e159";s:55:"Tests/Unit/State/Session/Storage/SessionAdapterTest.php";s:4:"7976";s:43:"Tests/Unit/State/Stubs/GetPostVarObject.php";s:4:"72d7";s:44:"Tests/Unit/State/Stubs/PersistableObject.php";s:4:"700d";s:45:"Tests/Unit/State/Stubs/SessionAdapterMock.php";s:4:"9280";s:46:"Tests/Unit/Tree/ExtJSJsonWriterVisitorTest.php";s:4:"9efb";s:44:"Tests/Unit/Tree/NestedSetTreeStorageTest.php";s:4:"7cb0";s:40:"Tests/Unit/Tree/NestedSetVisitorTest.php";s:4:"623b";s:28:"Tests/Unit/Tree/NodeMock.php";s:4:"aa06";s:38:"Tests/Unit/Tree/NodeRepositoryTest.php";s:4:"b539";s:28:"Tests/Unit/Tree/NodeTest.php";s:4:"a70a";s:35:"Tests/Unit/Tree/TreeBuilderTest.php";s:4:"cc34";s:28:"Tests/Unit/Tree/TreeTest.php";s:4:"95bc";s:34:"Tests/Unit/Tree/TreeWalkerTest.php";s:4:"782b";s:55:"Tests/Unit/Utility/ConstantToSpeakingNameMapperTest.php";s:4:"d10e";s:44:"Tests/Unit/Utility/ExtensionSettingsTest.php";s:4:"39ca";s:46:"Tests/Unit/Utility/FakeFrontendFacroryTest.php";s:4:"4de4";s:41:"Tests/Unit/Utility/NameSpaceArrayTest.php";s:4:"06b7";s:36:"Tests/Unit/Utility/UserAgentTest.php";s:4:"42a5";s:55:"Tests/Unit/ViewHelpers/IfValueChangesViewHelperTest.php";s:4:"444d";s:57:"Tests/Unit/ViewHelpers/RequestArgumentsViewHelperTest.php";s:4:"917a";s:53:"Tests/Unit/ViewHelpers/Be/FormTokenViewHelperTest.php";s:4:"c678";s:55:"Tests/Unit/ViewHelpers/Format/CssNameViewHelperTest.php";s:4:"c9d7";s:56:"Tests/Unit/ViewHelpers/Format/FileSizeViewHelperTest.php";s:4:"4ff0";s:64:"Tests/Unit/ViewHelpers/Format/RemoveLineBreaksViewHelperTest.php";s:4:"9e22";s:61:"Tests/Unit/ViewHelpers/Format/StringToLowerViewHelperTest.php";s:4:"b940";s:60:"Tests/Unit/ViewHelpers/Javascript/TemplateViewHelperTest.php";s:4:"64b9";s:50:"Tests/Unit/ViewHelpers/Tree/PathViewHelperTest.php";s:4:"2994";s:54:"Tests/Unit/ViewHelpers/Tree/SelectorViewHelperTest.php";s:4:"32c9";}',
  'comment' => 'New wrappers for wget and git commands. Some bugfixes and improvements',
  'user' => 'michaelknoll',
);
