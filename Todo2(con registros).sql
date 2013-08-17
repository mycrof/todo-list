-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 15, 2013 at 10:50 PM
-- Server version: 6.0.4
-- PHP Version: 6.0.0-dev

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `todo`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `avances`
-- 

CREATE TABLE `avances` (
  `ava_codigo` double NOT NULL AUTO_INCREMENT,
  `ava_tar_codigo` double NOT NULL,
  `ava_fecha` date NOT NULL,
  `ava_tiempo` time NOT NULL,
  PRIMARY KEY (`ava_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `avances`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `estados`
-- 

CREATE TABLE `estados` (
  `est_codigo` int(1) NOT NULL,
  `est_nombre` varchar(9) NOT NULL,
  PRIMARY KEY (`est_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `estados`
-- 

INSERT INTO `estados` VALUES (1, 'activa');
INSERT INTO `estados` VALUES (0, 'inactiva');
INSERT INTO `estados` VALUES (2, 'finalizad');

-- --------------------------------------------------------

-- 
-- Table structure for table `grupos`
-- 

CREATE TABLE `grupos` (
  `gru_codigo` int(10) NOT NULL,
  `gru_nombre` varchar(100) NOT NULL,
  `gru_lis_codigo` varchar(10) NOT NULL,
  PRIMARY KEY (`gru_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `grupos`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `listas`
-- 

CREATE TABLE `listas` (
  `lis_codigo` double NOT NULL AUTO_INCREMENT,
  `lis_nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`lis_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `listas`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tareas`
-- 

CREATE TABLE `tareas` (
  `tar_codigo` double NOT NULL AUTO_INCREMENT,
  `tar_nombre` varchar(100) NOT NULL,
  `tar_gru_codigo` int(10) DEFAULT NULL,
  `tar_tip_codigo` int(1) NOT NULL,
  `tar_lis_codigo` double NOT NULL,
  `tar_est_codigo` int(1) NOT NULL,
  PRIMARY KEY (`tar_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tareas`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tipo_tarea`
-- 

CREATE TABLE `tipo_tarea` (
  `tip_codigo` int(1) NOT NULL,
  `tip_nombre` varchar(25) NOT NULL,
  PRIMARY KEY (`tip_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `tipo_tarea`
-- 

INSERT INTO `tipo_tarea` VALUES (0, 'principal');
INSERT INTO `tipo_tarea` VALUES (1, 'secundaria');
