-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 03:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sentiment_analysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_03_104024_create_files_table', 2),
(5, '2024_12_03_105407_create_sentiment_history_table', 3),
(6, '2024_12_03_105551_add_text_and_sentiment_to_sentiment_history', 4),
(7, '2024_12_03_105658_create_sentiment_histories_table', 5),
(8, '2024_12_03_110017_create_sentiment_histories_table', 6),
(9, '2024_12_03_110056_add_uploaded_at_to_sentiment_histories_table', 7),
(10, '2024_12_03_161443_create_sentiment_histories_table', 8),
(11, '2024_12_03_165453_create_sentiment_histories_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sentiment_histories`
--

CREATE TABLE `sentiment_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sentiment` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sentiment_histories`
--

INSERT INTO `sentiment_histories` (`id`, `sentiment`, `score`, `file_name`, `file_path`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Positive', 7, NULL, NULL, 'Before you can begin to determine what the composition of a particular paragraph will be, you must first decide on an argument and a working thesis statement for your paper. What is the most important idea that you are trying to convey to your reader? The information in each paragraph must be related to that idea. In other words, your paragraphs should remind your reader that there is a recurrent relationship between your thesis and the information in each paragraph. A working thesis functions like a seed from which your paper, and your ideas, will grow. The whole process is an organic one—a natural progression from a seed to a full-blown paper where there are direct, familial relationships between all of the ideas in the paper.\r\n\r\nThe decision about what to put into your paragraphs begins with the germination of a seed of ideas; this “germination process” is better known as brainstorming. There are many techniques for brainstorming; whichever one you choose, this stage of paragraph development cannot be skipped. Building paragraphs can be like building a skyscraper: there must be a well-planned foundation that supports what you are building. Any cracks, inconsistencies, or other corruptions of the foundation can cause your whole paper to crumble.\r\n\r\nSo, let’s suppose that you have done some brainstorming to develop your thesis. What else should you keep in mind as you begin to create paragraphs? Every paragraph in a paper should be:\r\n\r\nUnified: All of the sentences in a single paragraph should be related to a single controlling idea (often expressed in the topic sentence of the paragraph).\r\nClearly related to the thesis: The sentences should all refer to the central idea, or thesis, of the paper (Rosen and Behrens 119).\r\nCoherent: The sentences should be arranged in a logical manner and should follow a definite plan for development (Rosen and Behrens 119).\r\nWell-developed: Every idea discussed in the paragraph should be adequately explained and supported through evidence and details that work together to explain the paragraph’s controlling idea (Rosen and Behrens 119).', '2024-12-03 08:58:54', '2024-12-03 08:58:54'),
(2, 'Positive', 3, NULL, NULL, 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.', '2024-12-03 09:17:02', '2024-12-03 09:17:02'),
(3, 'Positive', 3, NULL, NULL, 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph. A paragraph is defined as “a group of sentences or a single sentence that forms a unit” (Lunsford and Connors 116). Length and appearance do not determine whether a section in a paper is a paragraph. For instance, in some styles of writing, particularly journalistic styles, a paragraph can be just one sentence long. Ultimately, a paragraph is a sentence or group of sentences that support one main idea. In this handout, we will refer to this as the “controlling idea,” because it controls what happens in the rest of the paragraph.', '2024-12-03 09:17:09', '2024-12-03 09:17:09'),
(4, 'Positive', 7, NULL, NULL, 'Azure free account\r\nBest for proof of concept and exploring capabilities\r\n\r\nAvailable only to new Azure customers\r\n\r\nFree monthly amounts of 20+ popular services for 12 months (new Azure customers only)\r\n\r\nFree monthly amounts of 65+ always-free services\r\n\r\nAccess to full catalog of services up to free amounts and $200 credit\r\n\r\nSpending protection—credit card won’t be charged*\r\n\r\nNo upfront commitment—cancel anytime\r\n\r\nMove to pay-as-you-go pricing to continue beyond 30 days or after credit is used up', '2024-12-03 09:49:08', '2024-12-03 09:49:08'),
(5, 'Positive', 7, NULL, NULL, 'Azure free account\r\nBest for proof of concept and exploring capabilities\r\n\r\nAvailable only to new Azure customers\r\n\r\nFree monthly amounts of 20+ popular services for 12 months (new Azure customers only)\r\n\r\nFree monthly amounts of 65+ always-free services\r\n\r\nAccess to full catalog of services up to free amounts and $200 credit\r\n\r\nSpending protection—credit card won’t be charged*\r\n\r\nNo upfront commitment—cancel anytime\r\n\r\nMove to pay-as-you-go pricing to continue beyond 30 days or after credit is used up', '2024-12-03 10:19:41', '2024-12-03 10:19:41'),
(6, 'Positive', 7, NULL, NULL, 'Azure free account\r\nBest for proof of concept and exploring capabilities\r\n\r\nAvailable only to new Azure customers\r\n\r\nFree monthly amounts of 20+ popular services for 12 months (new Azure customers only)\r\n\r\nFree monthly amounts of 65+ always-free services\r\n\r\nAccess to full catalog of services up to free amounts and $200 credit\r\n\r\nSpending protection—credit card won’t be charged*\r\n\r\nNo upfront commitment—cancel anytime\r\n\r\nMove to pay-as-you-go pricing to continue beyond 30 days or after credit is used up', '2024-12-03 10:30:31', '2024-12-03 10:30:31'),
(7, 'Positive', 7, NULL, NULL, 'Azure free account\r\nBest for proof of concept and exploring capabilities\r\n\r\nAvailable only to new Azure customers\r\n\r\nFree monthly amounts of 20+ popular services for 12 months (new Azure customers only)\r\n\r\nFree monthly amounts of 65+ always-free services\r\n\r\nAccess to full catalog of services up to free amounts and $200 credit\r\n\r\nSpending protection—credit card won’t be charged*\r\n\r\nNo upfront commitment—cancel anytime\r\n\r\nMove to pay-as-you-go pricing to continue beyond 30 days or after credit is used up', '2024-12-03 10:33:19', '2024-12-03 10:33:19'),
(8, 'Neutral', 0, NULL, NULL, 'php artisan config:clear\r\nphp artisan cache:clear\r\nphp artisan optimize:clear\r\ncomposer dump-autoload', '2024-12-03 10:33:28', '2024-12-03 10:33:28'),
(9, 'Positive', 65, 'chap5.txt', 'uploads/chap5.txt', 'CHAPTER 5: SUMMARY, CONCLUSION, AND RECOMMENDATIONS\r\n5.1 Summary\r\nThe Collaboratask system addresses the problems experienced by individuals and teams in performing tasks in a manner that is both efficient and prioritized. But most common issues like missed deadlines, unclear responsibilities and low engagement hinder productivity and collaboration. To solve the problems, Collaboratask was born as a clever, feature-rich, easy to use task management platform.\r\nFor this to be achieved, the research methodology utilized has been designed to use technologies such as Laravel, JavaScript and MySQL in order to scale, secure and be responsive. Features offered include utilization of a Kanban board for visualization of task tracking, a reward system to increase the user motivation, real time communication tools and a customizable dashboard for users to personalize its interface. These supporting real time collaboration and improving team cohesion are all added benefits of this functionality not only simplifying task allocation and tracking.\r\nTesting with target user groups such as students, small businesses and IT professionals was also used to assess the system\'s effectiveness. The gamified reward system was praised by these groups for its feeding of engagement, and their praise for the system\'s user-friendly design. \r\nThese assessments confirmed that the Collaboratask system was effective at reducing the number of steps necessary to complete a task, as well as increasing productivity by streamlining workflow and by enabling users to engage with the system easily and adapt to many different types of workflows.\r\nCollaboratask has proven to be a successful solution for tackling task management challenges, as evidenced by the overwhelmingly positive feedback from users. The survey results show a strong consensus, with most respondents selecting \"agree\" or \"strongly agree\" regarding the system’s user-friendliness, its capacity to enhance productivity, and its effectiveness in simplifying task organization. This broad appeal across varied user groups including students, freelancers, and small business owners highlights its versatility and value. Collaboratask effectively meet the needs of individuals and teams alike, making it a powerful tool for improving task visibility, prioritization, and collaboration in any modern work or learning environment.\r\n5.2 Conclusion\r\nEngaging users with an intuitive and effective task management system is essential, and Collaboratask meets this need by streamlining task management for students, freelancers, and small businesses. This study addresses common challenges such as missed deadlines, ineffective communication, and difficulties in task prioritization. Features like task assignment, progress tracking, customizable interfaces, and team dashboards enhance productivity and collaboration.\r\nVisual tools such as the Kanban board and a gamified reward system further boost user engagement and participation, simplifying task management and fostering better teamwork and coordination.\r\nWhile the current system benefits smaller teams and individual users, additional features like offline functionality, private messaging, and expanded social tools are recommended to strengthen user connectivity and enhance the overall experience. Future research should focus on improving scalability and offline capabilities to make the system adaptable for larger organizations.\r\nOverall, Collaboratask establishes a solid foundation for task management by simplifying processes, improving communication, and supporting customization. Ongoing enhancements will ensure the platform continues to meet the evolving needs of users and supports effective task management in various contexts.\r\n5.3 Recommendations\r\nTo make Collaboratask more useful and engaging, the researchers recommend adding a few key features that will significantly improve how users interact with the platform. These enhancements will facilitate better communication, stronger connections between users, and the ability to stay productive even in offline scenarios.\r\nFirst, adding offline use is essential. It is common for productivity to be interrupted when internet connectivity is lost. If users are able to access their tasks and make updates while offline, with changes syncing automatically when a connection is restored, it would greatly enhance user experience. This approach ensures continuous productivity without the concern of connectivity issues. Implementing Progressive Web App (PWA) technology can effectively support this feature.\r\nAdditionally, private chats between users should be integrated. Currently, communication may be limited to team discussions, but adding a private messaging feature would enable direct conversations, quick updates, and file sharing. This would enhance teamwork by making communication more flexible and efficient. Real-time messaging tools such as WebSockets or Laravel Echo paired with Pusher can facilitate the implementation of this feature, while real-time notifications would ensure users remain informed.\r\nFinally, incorporating social features for user interaction would create a more engaging platform. Allowing users to view profiles beyond their immediate teams would encourage networking and collaboration across the platform. Users should have the ability to add contacts and view detailed profiles showcasing skills, projects, and activities, fostering a sense of community. A user directory with search functionality and a friend request system would complete this feature.\r\nOverall, these recommendations for offline use, private chats, and social features would make Collaboratask more interactive and user-friendly. Implementing these features would enhance user satisfaction and create a platform that promotes seamless work and connection.\r\n', '2024-12-04 05:16:56', '2024-12-04 05:16:56'),
(10, 'Positive', 72, 'featuresupdated.pdf', 'uploads/featuresupdated.pdf', 'Current features: \n• Add task \n• Create task \n• Delete task \n• Set due dates \n• Set priority of task (low, medium, high) \n• Add remarks \n• Attach files \n• Update task status (started, in progress, done) \n• Progress bar for each task  \n• Kanban board where tasks can be moved to reflect their status \n• Create team \n• Assign tasks to teams \n• Customization options (customize background color, font size, font style) \n• Display three different graphs to track individual progress \n \nDetailed Current features: \n• Add task, Create task, Delete task: These functionalities allow users to add new tasks to their \ntask management system, create detailed descriptions for each task, and delete tasks when they \nare no longer needed. \n• Set due dates: Users can assign deadlines to tasks to prioritize and manage their workload \neffectively. \n• Set priority of task (low, medium, high): This feature allows users to categorize tasks based on \ntheir importance or urgency, helping them focus on what matters most. \n• Add remarks: Users can add additional notes, comments, or instructions to tasks to provide \ncontext or updates. \n• Attach files: Users can upload and attach relevant files or documents to tasks for reference or \ncollaboration purposes. \n• Update task status (started, in progress, done): This feature enables users to track the progress \nof tasks by updating their status as they move through different stages of completion. \n• Progress bar for each task: Users can visualize the progress of individual tasks through a progress \nbar, giving them a quick overview of how close each task is to completion. \n• Kanban board where tasks can be moved to reflect their status: A Kanban board provides a visual \nrepresentation of tasks, organized into columns representing different stages of workflow (e.g., \nTo Do, In Progress, Done). Users can move tasks between columns to reflect their current status \nand progress. \n• Create team, Assign tasks to teams: Users can create teams and assign tasks to specific team \nmembers, facilitating collaboration and workload distribution among team members. \n• Customization options (customize background color, font size, font style): This feature allows \nusers to personalize their task management interface according to their preferences, making it \nmore visually appealing and user-friendly.\n\n• Display three different graphs to track individual progress: Users can view graphical \nrepresentations of their progress, such as Gantt charts, pie charts, or bar graphs, to track their \nproductivity and identify areas for improvement. \n \nAdditional Features: \n• Gamification: The team leader may assign points to members for each task they accomplish. \n• Pomodoro timer integration. \n• Task folders for individuals. \n• Attachment feature for video and voice records. \n• Team update feature where users can post updates and messages to the team, similar to a social \nmedia platform, enabling seamless communication and collaboration within the team. \n• Time tracking functionality. This includes the view of the duration of each task one created. \n• Ability to generate and print/forward reports. \n• Comments and history section where users can comment on tasks or accomplishments, view \ntask history (e.g., start date), and track progress with a progress bar representing completion \npercentage. \nAdditional Features: \n• Gamification: The team leader can award points to members for each task they complete, \nadding a competitive and motivating element to task completion. This includes having \nleaderboards in the team. \n• Pomodoro timer: Incorporating a Pomodoro timer helps users manage their work sessions \neffectively by breaking them into intervals, enhancing focus and productivity. \n• Individual task folders: Each task can be organized into its own folder for individual users, \nstreamlining organization and access to task-related information. \n• Video and voice record attachments: Users can attach video and voice recordings to tasks, \nallowing for richer communication and documentation of task-related details. \n• Team updates: Users can post updates and messages to the team, similar to a social media \nplatform, enabling seamless communication and collaboration within the team. \n• Time tracking: Users can track the time spent on tasks, providing insights into productivity and \nhelping to manage workload effectively. \n• Report generation and printing: Users can generate reports summarizing task progress and other \nrelevant metrics, with the option to print or share these reports for documentation or further \nanalysis. \n• Comments and history: Users can leave comments on tasks or accomplishments, and view the \ntask history, including when it was started and other relevant details. A progress bar or similar \nvisual representation can indicate the task\'s completion status.', '2024-12-04 05:20:25', '2024-12-04 05:20:25'),
(11, 'Neutral', 0, 'FINAL_CAP01-Title Proposal Form.pdf', 'uploads/FINAL_CAP01-Title Proposal Form.pdf', 'ANGELESUNIVERSITYFOUNDATION\nAngelesCity\nCOLLEGEOFCOMPUTER STUDIES\nInformationTechnologyDepartment\nCAPSTONETITLEPROPOSAL\nGROUPNAME:CodeCrafters\nLEADER:BATUL,AvienFlaireC.\nRESEARCHERS:\n1.MANGAYA,DarylQ.\n2.PANGILINAN,DerickNathanielR.\n3.TATCHO,JerahmeelR.\nPROJECTTITLE: CollaboraTask:ATaskManagementSystemEmpoweringTeams\nforSeamlessCollaborationandProductivityMaximization\nOVERVIEW\nDescription:\nPresentStatusofTechnology\norStateoftheArt:\nProblemsIntendedtoSolve:\nIndividualsorgroupscanbenefitfromthesystem\'sabilityto\ncentralizeandmonitortheirworkthroughataskmanagement\nsystem.Thesoftwareallowsuserstoeasilycreateprojects,\ndistributethemtogroupmembers,establishduedates,\nmonitorprogress,andcooperateefficiently.\nIntoday\'stechnologicallandscape,therearenumerousoptions\nforprojectmanagementsystemsandtaskmanagement\nsystems.Assigningtasks,monitoringprogress,settingdue\ndates,andfacilitatingcooperationareallfunctionsofferedby\nthesesolutions.Also,manypeoplestillusetheirown\nnotebookstocreateachecklistorsorttheirtasks.Thereis\nopportunityforinnovationandmodificationtohandlespecific\norganizationaldemandsandprocessesmoreeffectively,even\nwhilecurrentapproachesofferarangeoffunctionalities.\nDisorganizedworkduetoalackofmonitoring:Thelackofa\nunifiedsystemincreasesthelikelihoodofmiscommunication\nanddelayscausedbyjobsbeingdispersedacrossvarious\nplatforms.\nProblemswithevaluatingdevelopment:Itisdifficulttokeep\ntabsontheprogressofactivitiesandtheprojectasawhole\nwhentrackingisdonemanuallyorusingdifferenttechnologies.\n\nANGELESUNIVERSITYFOUNDATION\nAngelesCity\nCOLLEGEOFCOMPUTER STUDIES\nInformationTechnologyDepartment\nMotivationofthe\nResearchers:\nIneffectiveassignmentofresponsibilities:Thelackofa\nsystematicapproachtotaskallocationincreasesthelikelihood\nofconfusionandinefficiencyintheworkplace.\nControllingcompletiondate:Thereisahigherprobabilityof\nmissingdeadlinesandprojectdeliverydelayswhendeadlines\naremanagedmanually.\nThenecessitytosimplifyprojectmanagementprocedures,\nboostteamcooperation,increaseproductivity,andguarantee\non-timeprojectcompletioniswhatpromptedthedevelopment\nofthistaskmanagementsystem.Thegoaloftheresearchisto\nstreamlineprojectworkflowsandmaketaskmanagement\neasierbyfixingtheidentifieddifficulties.\nEXPECTEDOUTCOME:Maximizedproductivity:Projectteamsareabletowork\ntogethermoreeffectivelyandefficientlybecauseofthe\nsystem\'scentralizedtaskmanagementandreal-timeprogress\nreports.\nUsers\'EfficientUsage:Theapp\'sgoalistohaveahighrateof\nuseradoptionbymakingitsfeatureseasytounderstandand\nusesothatteammemberscanhandletheirtaskssmoothly.\nImprovedteamwork:Teammembersareabletowork\ntogethermoreeffectivelybecauseoffeatureslikejob\nassignmentandprioritizationofduties,whichenhances\ninteractionandcollaboration.\nProjectcompletiononschedule:Timelycompletionofprojects\nandsatisfyingcustomerexpectationsarebothmadepossible\nbyeffectivedeadlinemanagement,whichguaranteesthat\nactivitiesaredoneontime.\nEffectivelyManagedTasks:Theapp\'sgoal,withallitsextra\nfeatures,istomaketaskmanagementeasierbycuttingdown\nonadministrativeworkandlettingteamsusetheirresources\nmorewisely,whichwillimproveoutputandefficiency.\nProgressVisibility:Withthehelpofreal-timeprogress\nmonitoringandflexibledashboards,userscaneasilyseehow\ntasksandprojectsaredoing.Thisempowersthemtosee\nobstacles,checkprogress,andmakesensiblechoicestoensure\nprojectsstayontrack.\n\nANGELESUNIVERSITYFOUNDATION\nAngelesCity\nCOLLEGEOFCOMPUTER STUDIES\nInformationTechnologyDepartment\nLIMITATIONSOFTHESTUDY:ScalabilityforEnterprise-LevelOrganizations:Whenitcomes\ntolarge-scaletaskmanagement,thesystemmightnotbe\nscalableenoughforthejob.Largerenterprisesmayfindit\ndifficulttomanagetheirexpandinguserbase,hightask\nquantities,andintegrationcomplexity,yetitworkswellfor\nsmallbusinessesormoderate-sizedgroups.Thisrestriction\nmaymakeithardertoscaleandmakegooduseoftheavailable\nresources,callingforamorepowerfulsolutiondesignedfor\nlarge-scalebusinesses.\nLackofSufficientCollaborationResources:Userscouldhave\ntroublecollaboratingwiththeirteamsifthesystemdoesn\'t\nhaveadvancedcapabilitiesforteamwork,suchasinteractive\nwhiteboards,real-timefilemodifying,orinterfaceswith\nexternalsystems.\nLackofOfflineAccess:Users\'abilitytoaccessandupdatetasks\nofflinemaybehindered,whichcanimpacttheirproductivity\nandtheflexibilityoftheirtaskmanagement,particularlyin\nlocationswithpoorinternetorwhiletraveling.\nSYSTEM’SFEATURES/\nCAPABILITIESOFTHE\nSYSTEM:\nTaskCreationandOrganization:Usersshouldbeabletocreate\ntasks,assignthemtothemselvesorothers,setpriorities,and\ncategorizethemintoprojectsorcategories.\nCreateChecklists:Usershavetheabilitytogenerate\ntask-specificchecklistsfortheirprojects.Theyareabletodo\nmorebydividinghugetasksintolighter,moremanageable\nportions.\nNoteCreation:Userscanmakenotesforparticular\nassignments,projects,orassingleitems.Thesenotescanbe\nusedforavarietyofpurposes,includingwritingdown\nthoughts,providingcontexttoactivities,recordingmeeting\nminutes,andpreservingreferencematerial.\nDeadlineSettingandReminders:Userscansetdeadlinesfor\ntasksandreceivenotificationsorremindersasdeadlines\napproach.\nTaskPrioritization:Allowuserstoprioritizetasksbasedon\nimportanceorurgency,helpingthemfocusonwhatmatters\nmost.\n\nANGELESUNIVERSITYFOUNDATION\nAngelesCity\nCOLLEGEOFCOMPUTER STUDIES\nInformationTechnologyDepartment\nProgressTracking:Enableuserstotracktheprogressoftheir\ntasks,markthemascomplete,orupdatetheirstatusasthey\nworkonthem.\nCalendarIntegration:Synctaskswithusers\'calendarsto\nprovideacomprehensiveviewoftheirschedulesand\ndeadlines.\nCustomization:Eachuserhastheabilitytopersonalizetheir\nownroutinebyadjustingtheirpreferences,duedates,andlist\nofassignments.\nMobileAccessibility:Ensuretheapplicationisaccessibleon\nmobiledevices,withresponsivedesignandnativeappversions\nformobileplatforms.\nFileSharingandCollaboration:Supportfileattachmentsand\ndocumentsharingwithintaskstofacilitatecollaboration\namongteammembers.\nReceivingNotifications:Notificationsofupcomingduedates\norunfinishedactivitiesmighthelpusersremainmotivatedand\nachievetheirobjectives.\nNotedby:\nJONILOC.MABABA,DIT\nProfessor,CapstoneProject1\n\nANGELESUNIVERSITYFOUNDATION\nAngelesCity\nCOLLEGEOFCOMPUTER STUDIES\nInformationTechnologyDepartment', '2024-12-04 05:26:26', '2024-12-04 05:26:26'),
(12, 'Positive', 3, 'NEEDS.txt', 'uploads/NEEDS.txt', 'TO FIX:\r\n\r\n- Email veify\r\n- Unique username\r\n', '2024-12-04 05:26:36', '2024-12-04 05:26:36'),
(13, 'Positive', 2, NULL, NULL, 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph.', '2024-12-04 05:27:18', '2024-12-04 05:27:18'),
(14, 'Positive', 2, NULL, NULL, 'Paragraphs are the building blocks of papers. Many students define paragraphs in terms of length: a paragraph is a group of at least five sentences, a paragraph is half a page long, etc. In reality, though, the unity and coherence of ideas among sentences is what constitutes a paragraph.', '2024-12-04 05:31:51', '2024-12-04 05:31:51'),
(15, 'Positive', 2, 'ILP GROUP 6 (1).pdf', 'uploads/ILP GROUP 6 (1).pdf', 'ANGELESUNIVERSITYFOUNDATION\nAngelesCity\nCleanUp,StandUp:TakingActionAgainst\nPollution\nByGroup6:\nAshtonC.Batul\nbatul.ashtonfiorenz@auf.edu.ph\nZoePingul\npingul.eliciazoe@auf.edu.ph\nDanzzielB.Bautista\nbautista.charlezdanzziel@auf.edu.ph\nEthanDabu\ndabu.ethanjacob@auf.edu.ph\nKeanCarlMariano\nmariano.keancarl@auf.edu.ph\nViktorMiguelNuqui\nnuqui.viktormiguel@auf.edu.ph\nADVISER:CRISTINEANNIEGRACEQUITO\nSubmissionDate:November5,2024\n\nAbstract:\nCleanlinessisaveryessentialcomponentofhumanlifeinbothphysicalandspiritualterms.\nSpiritualcleanlinessreferstofollowingthebeliefsandritualsofyourreligion.Ontheother\nhand,thephysicaloneisessentialforthewell-beingofandexistenceofhumanity.Itisessential\ntoleadahealthyandwelllife.Infact,healthandcleanlinessarerelatedtoeachother.Toget\ngoodhealth,onemustpracticehygiene.Itisessentialtopracticemaintaininggoodhealthand\npreventdiseases.Moreover,equallyimportantisthecleanlinessofourenvironment.Whenyou\nmaintaincleanliness,youcanpreventdiseaseandleadahealthylife.Healthprofessionals\nadvocatehygienicpracticestoprolongthelivesofindividuals.Moreover,whentheenvironment\nisclean,safetyisenabled.Forinstance,Itisimportanttoensurethattherearenospillsofwater\ntopreventpeoplefromfalling.Similarly,clearingbushesaroundhomeswilloffersafetyfrom\nharmfulinsectsandanimals.Further,peoplemustnotonlycleantheenvironmentbutorganize\ntheenvironmentcarefully.Inotherwords,putawayharmfulobjectstopreventaccidents.\nSimilarly,inthefoodindustry,cleanlinessisoftheutmostimportance.Itensuresthewell-being\noftheconsumers.Mostimportantly,cleanlinessenablestheextensionofalifespanofanobject.\nWhenyoukeepthemetallicobjectsfreefromdustandrust,theywillhavealongershelflife.\nThus,peopleseehowcleanlinessisimportantineverysphereoflife.Whetheritislivingor\ninanimateobjects,everythingrequirescleanliness.Moreover,itisalsoamoralvirtuethatmakes\npeopleadmirable.\nKeywords:Cleanliness,Actionagainstpollution,Hygiene,Accidents\n\n1.PURPOSEOFTHESTUDY:\nThepurposeofthisstudyistofindoutwhybeingcleanissuperimportant,especiallyin\nthePhilippineswherethereisalotofpollution.Peoplewanttoseehowkeepingthingsclean\nhelpsusstayhealthyandhappy.Theytakecareoftheenvironmenttopreventpollution.Let\'s\nshowpeopleinourcountrythatourcommunityisclean.Theykeepourcitycleanbyplanting\nandcleaning\nPeoplealsowanttolearnhowacleanplacemakesthemsafe.Ifindividualscleanuptheir\ntrashandrefrainfromleavingitemsscatteredabout,theycanpreventaccidentsandhelp\nmaintainapleasantenvironment.\nInthePhilippines,whentheycleanupparksandbeaches,ithelpstheplantsandanimals,\ntoThepurposeofthisstudyistofindoutwhybeingcleanissuperimportant,especiallyinthe\nPhilippineswherethereisalotofpollution.Theywanttoseehowkeepingthingscleanhelpsus\nstayhealthyandhappy.Whentheywashtheirhandsandkeeptheirhomesandstreetstidy,they\ncanstopgermsandfeelgood.\nPeoplewanttolearnhowacleanplacemakesussafe.Ifindividualspickuptheirtrash\nanddon’tleavethingslyingaround,theycanavoidaccidentsandkeeptheenvironmentnice.\nInthePhilippines,Whentheycleanupparksandbeaches,ithelpstheplantsandanimalsas\nwell.\nFinally,theresearcherswilltalkabouthowbeingcleanmakesuskindpeople.Theykeep\nourneighborhoodsclean,itshowstheycareabouteachotherandourbeautifulcountry.This\nstudywillhelpeveryoneunderstandwhycleanlinessisreallyimportantforourhealthandfor\ntakingcareofthePhilippinesFinally,theywilltalkabouthowbeingcleanmakesuskindpeople.\nWhentheykeepourneighborhoodsclean,itshowsthattheycareabouteachotherandour\nbeautifulcountry.Thisstudywillhelpeveryoneunderstandwhycleanlinessisreallyimportant\nforourhealthandfortakingcareofthePhilippines.\n\nResearchobjectives\nThisstudyaimsto:\n1.Theresearchersaimedtocomeupwithadescriptiveanalysisofemissionsofvehiclesasthis\nhasanimpactonairpollutionandroad-environmentalsafety.\n2.Investigateandimplementprogramstoassistcommunitiesmostaffectedbypollution(e.g.,\nlow-incomeneighborhoodsorareasnearindustrialzones)throughhealthcareaccess,airand\nwaterpurificationinitiatives,andenvironmentaljusticeadvocacy.\n3.Promotelocalandglobalcleanupinitiatives,suchasriverandbeachcleanupsorreforestation\nprojects,andsupporteffortstorestorepollutedenvironments,providingboththeresourcesand\nthecommunityengagementneededtohealpollutedareas.\nLITERATUREREVIEW\n3.1.Portable,dispersion-based,gravimetric,andremoteairqualitysensorsexist.\nGIS/geostatisticsBaguioCBDPM10evaluation.PollutionishighinBaguio.Generatedhourly\nPollutionfromautoscreatesGaussianairflow.Thedispersionmodelindicatesconsiderable\nPM10concentrations(135-422μg/mm3)at20-meterintervals.Within40yardsofroadways,\npollutionisobvious.RegularkrigingestimatesPM10andspatialchangesatunsampledsites.\nGeostatisticalmodelpredictionsshouldbeassessedusingME,RMSE,andstandardisederrors.\n2--5searchneighboursandthenighttimevariablesmoothingfactorforecast5-meterpollution\nbetterthan2-10and0.3-0.5.Moststandarderrorsarebetween4.24and8.67εg/m3,with\ninterpolationtestingshowingalowMEof0.0003-0.0008μg/m3.TheRMSEwaswithina2-3%\nrangeofthearea\'smaximumpollutionlimits(2.95-5.43μg/m3).Theairdispersionmodel\'s\nspatialfluctuations,concentrationpredictions,andsurfacerepresentationsareimprovedbythis\nstudy.Portable,dispersion-based,gravimetric,andremoteairqualitysensorsexist.\nGIS/geostatisticsBaguioCBDPM10evaluation.FilthyBaguio.Hourlysimulationsshowed\nGaussianairdispersionandcarpollution.ThedispersionmodelindicatesconsiderablePM10\nconcentrations(135-422μg/mm3)at20-meterintervals.Within40yardsofroadways,pollution\nisobvious.RegularkrigingestimatesPM10andspatialchangesatunsampledsites.\nGeostatisticalmodelpredictionsshouldbeassessedusingME,RMSE,andstandardisederrors.\nPredicting5-meterpollutionrequiresvariablesmoothingand2-5searchneighbours.\n\n(RamosandBlanc,2019)\n3.2.AccordingtoCeballosetal.(2024b)animalsandpeoplealikeareharmedbyairpollution.A\nperson\'shealthcantakeanosediveifPM2.5getsintotheirbloodandlungs.Premature\nmortality,problemswithneonataldevelopment,andbadbirthoutcomesareallcausedwithPM\n2.5.ThisstudylooksattheeffectsofPM2.5onrespiratorydiseaseandmortalityinnewbornsin\nthePhilippines.TheNationalDemo-graphicandHealthSurveyconductedbythePhilippine\nStatisticsAuthorityin2022documentedcasesofrespiratorydiseaseanddeathsamongchildren.\nDataaboutPM2.5wasavailableonthewebsiteoftheEnvironmentalManagementBureau.\nChoroplethmaps,regression,andcorrelationshouldbeutilised.IncreasesinPM2.5arecaused\nbyindustrial,commercial,andurbanisationactivities.Infant,post-neonatal,andunder-5\nmortality(r=0.61),acuterespiratorydisease(r=0.87),andasthma(r=0.90)areallpositively\nimpactedbyPM2.5,asarerespiratoryinfectionsinchildren.Childmortalityandrespiratory\ndiseasesarecausedbyincreasesinPM2.5.Reducingthehealthconcernsassociatedwithair\npollutionrequiresaconcertedeffortfromindustry,communities,governments,andindividuals\nintheformoflegislation,newtechnology,publiceducation,andcommunityinvolvement.\n3.3.AccordingtoRomarateetal.(2024)thepoliticalandeconomiccentreofthePhilippinesis\nlocatedinMetroManila.Accordingtotheirfindings,theannualaveragePM2.5concentrationin\nMetroManilaisconsistentlyhigherthanbothUSEPAandnationalregulations,placingitamong\nthehighestlevelsglobally.Thereneedstobeanimprovementinthehealth-threateningambient\nairpollutioninMetroManila.Peopleneedtobemoreenvironmentallyconsciousinordertohelp\nreduceairpollution.Thisstudyaimedtogaugethelevelofknowledge,perception,andattitude\ntowardshealthamongMetroManilaresidentsregardingairquality.Therewere593participants\nand57questionsinthispollaboutMetroManila.Thepercentageofpeoplewhodonotknow\nabouttherules,laws,andstandardspertainingtovehicleandbusinessemissionsis54.1%,\n69.6%,and54.4%,respectively.Beyondanti-smokeactivities,mostrespondersdonotknow\naboutgovernmentairqualityinitiatives.Peoplereportmoderatetohighlevelsofairpollution\n(37.8%,50.8%).SustainabilityandcleanerairareprioritiesforthepeopleofMetroManila.\nTheremaybeabarriertopeoplechangingtheirbehaviourtoreduceairpollutioninthe\nPhilippinesduetotheabsenceofairqualitystatus,plans,andregulations,particularlyinMetro\n\nManila.Accordingtotheresearch,allgovernmententitiesresponsibleforcontrollingairquality\nshouldinformthepublicaboutthecurrentstateofairpollution,itsconsequences,andwaysto\nreducepollutioninordertoinspirepeopletotakeaction.\n3.4.Airpollutionremainsasasubstantialhealthproblem,particularlyregardingthecombined\nhealthrisksarisingfromsimultaneousexposuretomultipleairpollutants.However,\nunderstandingthesecombinedexposureeventsoverlongperiodshasbeenhinderedbysparse\nandtemporallyinconsistentmonitoringdata.HereweanalyzedailyambientPM2.5,PM10,NO2\nandO3concentrationsata0.1-degreeresolutionduring2003–2019across1426contiguous\nregionsin35Europeancountries,representing543millionpeople.WefindthatPM10levels\ndeclineby2.72%annually,followedbyNO2(2.45%)andPM2.5(1.72%).Incontrast,O3\nincreaseby0.58%insouthernEurope,leadingtoasurgeinuncleanairdays.Despiteairquality\nadvances,86.3%ofEuropeansexperienceatleastonecompoundeventdayperyear,especially\nforPM2.5-NO2andPM2.5-O3.Wehighlighttheimprovementsinairqualitycontrolbut\nemphasizetheneedfortargetedmeasuresaddressingspecificpollutantsandtheircompound\nevents,particularlyamidstrisingtemperatures.(Chenetal.,2024)\n3.5.Inthisbriefcriticalanalysis,wewilllookatthemaincausesofairpollutioninEurope.Our\ngoalistoprovideacomprehensiveanalysisoftheenvironmentalandhealthimpactsofvarious\npollutants,includingammonia,NOx,SOx,non-methanevolatileorganiccompounds,particulate\nmatter,andnon-methanevolatileorganiccompounds,byutilisinglevelandtrendassessment\ntechniques.InformationgatheredcomesfromtheEuropeanUnionanditsmemberstates.We\nevaluatetheeffectivenessofcurrentlegislationinreducinghealthandenvironmentalproblems,\naswellasoverallemissiontrendsandemissionsspecifictosectors.ReducingNOxemissionsis\nthemostpressingandpotentiallybeneficialactiontotake,accordingtothisdataandthe\ncost-benefitanalysis.(Koolen&Rothenberg,2018)\n4.REFERENCES:\n\nLocalArticles\nCeballos,R.F.,Gallano,R.C.,&Visaya,L.D.(2024b).Assessingtherelationshipandeffectof\nairpollution[PM2.5]onchildrespiratoryillnessandchildmortalityinthePhilippines.\nDeletedJournal.https://doi.org/10.35762/aer.2024033\nRamos,R.V.,&Blanco,A.C.(2019).GEOSTATISTICSFORAIRQUALITYMAPPING:\nCASEOFBAGUIOCITY,PHILIPPINES.theInternationalArchivesofthe\nPhotogrammetry,RemoteSensingandSpatialInformationSciences/International\nArchivesofthePhotogrammetry,RemoteSensingandSpatialInformationSciences,\nXLII-4/W19,353–359.https://doi.org/10.5194/isprs-archives-xlii-4-w19-353-2019\nRomarate,R.A.,Madarcos,J.R.V.,Pacilan,C.J.M.,Bacosa,H.P.,&Torres,A.G.(2024b).\nWhenairqualitymatters:awareness,perception,andattitudeoftheresidentsinMetro\nManila,Philippines.Environment Developmentand Sustainability.\nhttps://doi.org/10.1007/s10668-024-05215-y\nForeignArticles\nChen,Z.,Petetin,H.,Turrubiates,R.F.M.,Achebak,H.,García-Pando,C.P.,&Ballester,J.\n(2024).Populationexposuretomultipleairpollutantsanditscompoundepisodesin\nEurope.NatureCommunications,15(1).https://doi.org/10.1038/s41467-024-46103-3\nKoolen,C.D.,&Rothenberg,G.(2018).AirpollutioninEurope.ChemSusChem,12(1),\n164–172.https://doi.org/10.1002/cssc.201802292', '2024-12-04 05:59:27', '2024-12-04 05:59:27'),
(16, 'Positive', 5, 'codecrafters_advisers-endorsement-lane.docx', 'uploads/codecrafters_advisers-endorsement-lane.docx', 'ANGELES UNIVERSITY FOUNDATIONAngeles City COLLEGE OF COMPUTER STUDIES 1st Semester, Academic Year 2024-2025CAP02 – CAPSTONE PROJECT 2 ADVISER’S ENDORSEMENT The undersigned certifies that the capstone project entitled CollaboraTask: Fostering Efficient Teamwork and Maximizing Performance using a Task Management System Developed by: Batul, Avien Flaire C.  Mangaya, Daryl Q.  Pangilinan, Derick Nathaniel R. Tatcho, Jerahmeel R. 	 has been verified, evaluated and affirms that the same complies with the standard requirements for a capstone project. In view thereof, the undersigned endorses the said capstone project for final defense. Richard E. Dilan, MIT Adviser November 07, 2024 ', '2024-12-04 06:06:56', '2024-12-04 06:06:56'),
(17, 'Positive', 5, NULL, NULL, 'Available only to new Azure customers\r\n\r\nFree monthly amounts of 20+ popular services for 12 months (new Azure customers only)\r\n\r\nFree monthly amounts of 65+ always-free services\r\n\r\nAccess to full catalog of services up to free amounts and $200 credit\r\n\r\nSpending protection—credit card won’t be charged*\r\n\r\nNo upfront commitment—cancel anytime\r\n\r\nMove to pay-as-you-go pricing to continue beyond 30 days or after credit is used up', '2024-12-04 06:21:38', '2024-12-04 06:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('YVTxtqWgS1elwWhbsiiAfmyBWK7v41weZixGaBjA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlFkRkNvWFNqSWNjMDZtMmNORlBTUzhxQTRBWGtaUmk5dzRKb2U2RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733322098);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sentiment_histories`
--
ALTER TABLE `sentiment_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sentiment_histories`
--
ALTER TABLE `sentiment_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
