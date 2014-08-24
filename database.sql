-- phpMyAdmin SQL Dump
-- version 3.1.5
-- http://www.phpmyadmin.net
--
-- Serveur: sha256.sql.free.fr
-- Généré le : Dim 24 Août 2014 à 23:33
-- Version du serveur: 5.0.83
-- Version de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `sha256`
--

-- --------------------------------------------------------

--
-- Structure de la table `sha0`
--

CREATE TABLE IF NOT EXISTS `sha0` (
  `id` bigint(20) NOT NULL,
  `hash` text collate latin1_general_ci NOT NULL,
  `texte` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sha1`
--

CREATE TABLE IF NOT EXISTS `sha1` (
  `id` bigint(20) NOT NULL auto_increment,
  `sha1` text collate latin1_general_ci NOT NULL,
  `mot` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=128779 ;

-- --------------------------------------------------------

--
-- Structure de la table `sha256`
--

CREATE TABLE IF NOT EXISTS `sha256` (
  `id` bigint(20) NOT NULL auto_increment,
  `value` text collate latin1_general_ci NOT NULL,
  `hash` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=129302 ;

-- --------------------------------------------------------

--
-- Structure de la table `sha384`
--

CREATE TABLE IF NOT EXISTS `sha384` (
  `id` bigint(11) NOT NULL auto_increment,
  `value` text collate latin1_general_ci NOT NULL,
  `hash` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=129311 ;

-- --------------------------------------------------------

--
-- Structure de la table `sha512`
--

CREATE TABLE IF NOT EXISTS `sha512` (
  `id` bigint(20) NOT NULL auto_increment,
  `value` text collate latin1_general_ci NOT NULL,
  `hash` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=129099 ;
