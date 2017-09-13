-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 13 Septembre 2017 à 16:11
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `imie_formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapter`
--

CREATE TABLE `chapter` (
  `id_chapter` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `chapter_title` varchar(255) NOT NULL,
  `chapter_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `chapter`
--

INSERT INTO `chapter` (`id_chapter`, `id_product`, `content`, `chapter_title`, `chapter_number`) VALUES
(7, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', 'Début du chapitre', 1),
(8, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', 'Milieu du chapitre', 2),
(9, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', 'Fin du chapitre', 3),
(10, 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', 'Partie 1', 1),
(11, 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', 'Partie 2', 2),
(12, 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', 'Partie 3', 3),
(13, 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', 'Il faut bien commencer ...', 1),
(14, 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', '... sans se précipiter ;..', 2),
(15, 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna ex, sollicitudin sed euismod fringilla, scelerisque id leo. Praesent imperdiet ornare diam, at ullamcorper lorem condimentum quis. Praesent eget erat condimentum, iaculis tellus ac, porta odio. Cras finibus porttitor tincidunt. Sed pretium diam felis, et finibus diam elementum a. Praesent laoreet suscipit eleifend. In tristique tincidunt massa, id mattis nulla convallis ut.\r\n\r\nIn mollis elementum pretium. Cras at fringilla purus, nec dignissim dui. Aliquam sed diam a nisi accumsan vulputate. Mauris eu nulla mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus vitae dolor eu dui iaculis bibendum ac et dui. Suspendisse leo mauris, molestie vel mi a, ultricies fringilla arcu. Morbi dapibus non nunc quis viverra. In sed dictum enim. Curabitur eu hendrerit eros. Duis nec mattis ex. Fusce facilisis lectus at lectus lobortis aliquet. Maecenas efficitur faucibus purus, eu tristique dui facilisis at.\r\n\r\nNam in magna eget odio volutpat pellentesque non at eros. Maecenas consequat auctor turpis vel egestas. Pellentesque vel ultrices leo. Vestibulum nec velit aliquet, fermentum nunc eu, tempor nulla. Donec blandit, augue et semper tincidunt, est nisl aliquam quam, et facilisis leo purus eget urna. Ut et sagittis elit. Nulla lobortis, eros vel aliquam luctus, felis est rhoncus lacus, sed rutrum augue nunc vel sapien. Duis dictum vel sem et accumsan. Donec eu egestas massa, nec eleifend sem. Sed condimentum scelerisque rhoncus.\r\n\r\nCurabitur accumsan tincidunt nunc, vel dictum turpis commodo ut. Proin nunc purus, aliquam ut cursus ut, egestas a lacus. Mauris dignissim est metus, non pharetra leo tempor sed. Mauris laoreet ante sit amet tincidunt dapibus. Nulla mauris nunc, ullamcorper vitae condimentum ac, blandit at magna. Nam dui sapien, faucibus id diam in, blandit feugiat dolor. Sed eget bibendum felis. Sed egest', '... pour bien terminer', 3);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `id_document` int(11) NOT NULL,
  `id_document_type` int(11) DEFAULT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `document_type`
--

CREATE TABLE `document_type` (
  `id_document_type` int(11) NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text,
  `keywords` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `istutorial` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id_product`, `image`, `title`, `summary`, `keywords`, `id_user`, `istutorial`) VALUES
(10, 'file01.jpeg', 'DevOps pour les nuls', 'Aux débuts de l''informatique d''entreprise, les applications étant de taille limitée et peu intégrées les unes avec les autres, la distinction entre dev et ops n''avait pas lieu d''être : l''équipe qui s''occupait de l''administration du système se chargeait également d''y apporter les changements nécessaires pour le développement de nouvelles fonctionnalités.\r\n\r\n<strong>Mais l''évolution de l''information d''entreprise a introduit de nouvelles contraintes qui ont conduit à un nouveau paradigme :</strong>\r\n\r\nl''apparition de systèmes intégrés comme les ERP ou progiciel de gestion intégré a augmenté la taille des applications et leur interdépendance ;\r\nil est aussi apparu que l''état d''esprit ops était assez différent de l''état d''esprit dev, ce qui créait de facto une certaine polarisation des membres de l''équipe, soit plutôt ops, soit plutôt dev ;\r\nl''inefficacité de mélanger tâches de type ops et tâches de type dev ainsi que le coût (en termes de temps de travail) du passage continuel d''un type à l''autre.\r\nPour ces raisons, il est alors apparu plus efficace de séparer les aspects dev et ops en plaçant les responsabilités respectives dans des équipes séparées. On parle alors souvent de « build » pour la conception, de « run » pour la maintenance et de « change » pour l''évolution, généralement délivrée en mode projet. Dans ce nouveau paradigme, les équipes sont organisées autour des mêmes systèmes et sont donc amenées à travailler main dans la main.', 'DevOps,nul,apprendre', 4, 0),
(11, 'file02.jpg', 'Null pour les developpeurs', '/dev/null est un fichier spécial des systèmes d''exploitation Unix.\r\n\r\n<strong>Ce pseudo-périphérique (device, en anglais) sert à rediriger un contenu dont on n''a pas besoin, et qui ne doit pas être sauvegardé ni affiché à l''écran. Toute information envoyée vers ce « périphérique » est automatiquement détruite.</strong>\r\n\r\nCe périphérique est appelé null et il est situé dans le répertoire « /dev » où sont répertoriés les périphériques. On envoie donc ce qu''on ne veut pas garder vers ce « /dev/null ».', 'null,dev,unix', 4, 0),
(12, 'file03.jpg', 'N''oublie pas de regarder dans le rétro-ingénierie !', '<strong>La rétro-ingénierie, ou ingénierie inverse ou inversée, est l''activité qui consiste à étudier un objet pour en déterminer le fonctionnement interne ou la méthode de fabrication.</strong> On parle également de rétroconception et dans le domaine du vivant de biomimétisme. Le terme équivalent en anglais est reverse engineering.\r\n\r\nIl s''agit de :\r\n\r\ncomprendre le fonctionnement de l''objet, pour être en mesure de l''utiliser correctement, de le modifier, ou encore de s''assurer de son bon fonctionnement1, le cas échéant dans un cadre pédagogique « Beaucoup d''étudiants, dans les années 1980, ont passé des journées entières à se former à la microélectronique à partir de circuits existants selon les principes de la rétro-ingénierie pédagogique » rappellent C Berrou et V gripon (2012)2 ;\r\ncomprendre le fonctionnement et l''utilité d''un objet technique ancien, ou d''une œuvre d''art présentant des aspects techniques dont en archéologie3 et en archéologie industrielle4 ou dans le cadre de la restauration d’œuvres techniques anciennes5\r\nfabriquer une copie de cet objet alors qu''on ne peut en obtenir ni les plans ni les méthodes de fabrication (activité généralement illégale si l''objet est encore protégé par un brevet) ;\r\ncréer un nouvel objet ayant des fonctionnalités identiques à l''objet de départ, sans viol de brevet ;\r\nanalyser un objet produit par un concurrent, dans le cadre d''une activité de veille concurrentielle ou pour détecter d''éventuelles violations de brevets.\r\nutiliser les méthodes de la rétro-ingénierie pour innover en s''inspirant du vivant (biomimétique)\r\nSuivant la nature de l''objet et l''objectif poursuivi, on a recours à différentes méthodes et techniques.\r\n\r\nPour des objets physiques, il est possible de démonter le système jusqu''à un certain point pour en analyser les constituants.\r\nEn électronique et en informatique, la démarche peut être celle de l''étude d''une boîte opaque : on isole l''objet à étudier, on détermine les entrées et les sorties actives. On essaie ensuite de déterminer la réponse du système en fonction des variations du signal ou des signaux en entrée.\r\ncertains outils de rétro-ingénierie peuvent être utilisés pour analyser des systèmes complexes tels le web ou l''une de ses parties6\r\nen biomimétique où il s''agit de comprendre le fonctionnement d''être vivants ou d''écosystèmes, un large pannel d''outils d''imagerie, de biomarqueurs et bioindicateurs, d''analyse biomoléculaire et jusqu''à l''observation éthologique peuvent être mobilisées.', 'reverse, retro, ingenieur', 4, 0),
(13, 'file04.jpg', 'Tuto-ou rien !', 'Un tutoriel est un guide d''apprentissage du type tutorat, destiné en particulier au domaine informatique et permettant d''aider l''utilisateur novice à se former de manière autonome à l''utilisation d''un logiciel, à un langage de programmation ou à des jeux interactifs. Cependant, l''utilisation du mot « tutoriel » s''est généralisée et s''est étendue à toutes sortes d''activités, comme le bricolage, l''automobile, la photo, la vidéo, le jardinage, les loisirs créatifs, etc.\r\n\r\nLe tutoriel est un outil pédagogique qui peut se présenter sous la forme d''un autre logiciel, d''une vidéo, d''un document textes/images électronique ou papier, constitué d''instructions détaillées pas à pas, le plus souvent par étapes. Contrairement au mode d''emploi qui énumère et décrit les fonctionnalités en détail, le tutoriel montre comment atteindre l''un des objectifs possibles, clairement défini. Dans le cas d''un logiciel, il peut constituer une première méthode d''approche, constituée d''exemples pratiques. Pour toutes les activités, on enseigne comment réaliser une tâche à des utilisateurs considérés comme peu compétents dans le domaine concerné.\r\n\r\nLe mot anglais tutorial, dont « tutoriel » est issu, déconseillé par les organismes de néologie français et québécois, est cependant également utilisé par certains francophones. On constate depuis 2005 une utilisation accrue du terme tuto(s) (apocope) sur internet pour désigner un tutoriel en langage courant. Le mot tuto a d''ailleurs été intégré dans l''édition 2016 du Petit Larousse de la langue française1.\r\n\r\n<strong>On utilise également le terme didacticiel, bien que celui-ci désigne plutôt un programme informatique didactique.</strong>', 'tutoriel, savoir', 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product_order`
--

CREATE TABLE `product_order` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `date` varchar(19) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rel_chapter_document`
--

CREATE TABLE `rel_chapter_document` (
  `idChapter` int(11) NOT NULL,
  `idDocument` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id_role`, `type`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `additional_address` varchar(255) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `deactivation_date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `id_role`, `firstname`, `lastname`, `address`, `additional_address`, `zip_code`, `city`, `country`, `email`, `password`, `deactivation_date`) VALUES
(4, 1, 'Antoine', 'Benaud', '1 allée des moustaches', NULL, '44000', 'Nantes', 'France', 'admin@imie-formation.fr', '@dminSymfony44', NULL),
(5, 2, 'Alice', 'Marcelle', '54 rue des lilas', NULL, '44000', 'Nantes', 'France', 'simpleUser@imie-formation.fr', 'user', NULL),
(6, 2, 'Michel', 'Passière', '3 boulevard des grands noms', NULL, '75000', 'Paris', 'France', 'michel.passiere@mail.fr', 'user', '30/09/2017');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id_chapter`),
  ADD KEY `FK_chapter_product` (`id_product`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_document`),
  ADD KEY `FK_document_document_type` (`id_document_type`);

--
-- Index pour la table `document_type`
--
ALTER TABLE `document_type`
  ADD PRIMARY KEY (`id_document_type`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `FK_product_user` (`id_user`);

--
-- Index pour la table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `FK_product_order_user` (`id_user`),
  ADD KEY `FK_product_order_product` (`id_product`);

--
-- Index pour la table `rel_chapter_document`
--
ALTER TABLE `rel_chapter_document`
  ADD PRIMARY KEY (`idChapter`,`idDocument`),
  ADD KEY `IDX_FAB3739FE938DEDC` (`idChapter`),
  ADD KEY `IDX_FAB3739F8BCAA02D` (`idDocument`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `FK_user_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id_chapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `document_type`
--
ALTER TABLE `document_type`
  MODIFY `id_document_type` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `FK_chapter_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `FK_document_document_type` FOREIGN KEY (`id_document_type`) REFERENCES `document_type` (`id_document_type`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04ADEAC64457` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `FK_product_order_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `FK_product_order_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `rel_chapter_document`
--
ALTER TABLE `rel_chapter_document`
  ADD CONSTRAINT `FK_FAB3739F8BCAA02D` FOREIGN KEY (`idDocument`) REFERENCES `document` (`id_document`),
  ADD CONSTRAINT `FK_FAB3739FE938DEDC` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`id_chapter`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
