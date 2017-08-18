-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2016 at 07:07 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `username` varchar(20) NOT NULL,
  `DLIB` char(100) NOT NULL DEFAULT '--',
  `DLAB` char(100) NOT NULL DEFAULT '--',
  `THESIS` char(100) NOT NULL DEFAULT '--',
  `GUIDE` char(100) NOT NULL DEFAULT '--',
  `LIB` char(100) NOT NULL DEFAULT '--',
  `CARETAKER` char(100) NOT NULL DEFAULT '--',
  `WARDEN` char(100) NOT NULL DEFAULT '--',
  `GYMKHANA` char(100) NOT NULL DEFAULT '--',
  `aREGISTRAR` char(100) NOT NULL DEFAULT '--',
  `ONCC` char(100) NOT NULL DEFAULT '--',
  `INCC` char(100) NOT NULL DEFAULT '--',
  `WORK` char(100) NOT NULL DEFAULT '--',
  `QIP` char(100) NOT NULL DEFAULT '--',
  `amit` char(100) NOT NULL DEFAULT '--',
  `arijit` char(100) NOT NULL DEFAULT '--',
  `arnab` char(100) NOT NULL DEFAULT '--',
  `aryabartta` char(100) NOT NULL DEFAULT '--',
  `ashish` char(100) NOT NULL DEFAULT '--',
  `benny` char(100) NOT NULL DEFAULT '--',
  `chandan` char(100) NOT NULL DEFAULT '--',
  `deepanjan` char(100) NOT NULL DEFAULT '--',
  `diganta` char(100) NOT NULL DEFAULT '--',
  `sajith` char(100) NOT NULL DEFAULT '--',
  `gautam` char(100) NOT NULL DEFAULT '--',
  `hemangee` char(100) NOT NULL DEFAULT '--',
  `jatindra` char(100) NOT NULL DEFAULT '--',
  `john` char(100) NOT NULL DEFAULT '--',
  `pinaki` char(100) NOT NULL DEFAULT '--',
  `pradip` char(100) NOT NULL DEFAULT '--',
  `purandar` char(100) NOT NULL DEFAULT '--',
  `inkulu` char(100) NOT NULL DEFAULT '--',
  `rashmi` char(100) NOT NULL DEFAULT '--',
  `svrao` char(100) NOT NULL DEFAULT '--',
  `samit` char(100) NOT NULL DEFAULT '--',
  `sanasam` char(100) NOT NULL DEFAULT '--',
  `santosh` char(100) NOT NULL DEFAULT '--',
  `shivashankar` char(100) NOT NULL DEFAULT '--',
  `sukumar` char(100) NOT NULL DEFAULT '--',
  `sushanta` char(100) NOT NULL DEFAULT '--',
  `venkatesh` char(100) NOT NULL DEFAULT '--',
  `vijaya` char(100) NOT NULL DEFAULT '--',
  `HOD` char(100) NOT NULL DEFAULT '--',
  `FINANCE` char(100) NOT NULL DEFAULT '--',
  `ACADEMIC` char(100) NOT NULL DEFAULT '--'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`username`, `DLIB`, `DLAB`, `THESIS`, `GUIDE`, `LIB`, `CARETAKER`, `WARDEN`, `GYMKHANA`, `aREGISTRAR`, `ONCC`, `INCC`, `WORK`, `QIP`, `amit`, `arijit`, `arnab`, `aryabartta`, `ashish`, `benny`, `chandan`, `deepanjan`, `diganta`, `sajith`, `gautam`, `hemangee`, `jatindra`, `john`, `pinaki`, `pradip`, `purandar`, `inkulu`, `rashmi`, `svrao`, `samit`, `sanasam`, `santosh`, `shivashankar`, `sukumar`, `sushanta`, `venkatesh`, `vijaya`, `HOD`, `FINANCE`, `ACADEMIC`) VALUES
('nikunj', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', 'Return my book', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', 'Mojodaj', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--'),
('mayank', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--'),
('harshit', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--'),
('student1', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--'),
('student2', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', 'Return my book', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--'),
('student3', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL DEFAULT 'teacher'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`username`, `password`, `position`) VALUES
('DLIB', 'DLIB', 'teacher'),
('amit', 'amit', 'teacher'),
('arijit', 'arijit', 'teacher'),
('arnab', 'arnab', 'teacher'),
('aryabartta', 'aryabartta', 'teacher'),
('ashish', 'ashish', 'teacher'),
('benny', 'benny', 'teacher'),
('chandan', 'chandan', 'teacher'),
('deepanjan', 'deepanjan', 'teacher'),
('diganta', 'diganta', 'teacher'),
('sajith', 'sajith', 'teacher'),
('gautam', 'gautam', 'teacher'),
('hemangee', 'hemangee', 'teacher'),
('jatindra', 'jatindra', 'teacher'),
('john', 'john', 'teacher'),
('pinaki', 'pinaki', 'teacher'),
('pradip', 'pradip', 'teacher'),
('purandar', 'purandar', 'teacher'),
('inkulu', 'inkulu', 'teacher'),
('rashmi', 'rashmi', 'teacher'),
('svrao', 'svrao', 'teacher'),
('samit', 'samit', 'teacher'),
('sanasam', 'sanasam', 'teacher'),
('santosh', 'santosh', 'teacher'),
('shivashankar', 'shivashankar', 'teacher'),
('sukumar', 'sukumar', 'teacher'),
('sushanta', 'sushanta', 'teacher'),
('venkatesh', 'venkatesh', 'teacher'),
('vijaya', 'vijaya', 'teacher'),
('DLAB', 'DLAB', 'teacher'),
('THESIS', 'THESIS', 'teacher'),
('GUIDE', 'GUIDE', 'teacher'),
('LIB', 'LIB', 'teacher'),
('GDUES', 'GDUES', 'teacher'),
('CARE', 'CARE', 'teacher'),
('ONCC', 'ONCC', 'teacher'),
('INCC', 'INCC', 'teacher'),
('WORK', 'WORK', 'teacher'),
('QIP', 'QIP', 'teacher'),
('GYMKHANA', 'GYMKHANA', 'teacher'),
('WARDEN', 'WARDEN', 'teacher'),
('CARETAKER', 'CARETAKER', 'teacher'),
('aREGISTRAR', 'aREGISTRAR', 'teacher'),
('HOD', 'HOD', 'teacher'),
('FINANCE', 'FINANCE', 'teacher'),
('ACADEMIC', 'ACADEMIC', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `position` varchar(10) NOT NULL,
  `DLAB` int(10) NOT NULL DEFAULT '0',
  `DLIB` int(3) NOT NULL DEFAULT '0',
  `THESIS` int(10) NOT NULL DEFAULT '0',
  `GUIDE` int(10) NOT NULL DEFAULT '0',
  `LIB` int(10) NOT NULL DEFAULT '0',
  `CARETAKER` int(3) NOT NULL DEFAULT '0',
  `WARDEN` int(3) NOT NULL DEFAULT '0',
  `GYMKHANA` int(3) NOT NULL DEFAULT '0',
  `aREGISTRAR` int(3) NOT NULL DEFAULT '0',
  `ONCC` int(10) NOT NULL DEFAULT '0',
  `INCC` int(10) NOT NULL DEFAULT '0',
  `WORK` int(10) NOT NULL DEFAULT '0',
  `QIP` int(10) NOT NULL DEFAULT '0',
  `amit` int(3) NOT NULL DEFAULT '0',
  `arijit` int(3) NOT NULL DEFAULT '0',
  `arnab` int(3) NOT NULL DEFAULT '0',
  `aryabartta` int(3) NOT NULL DEFAULT '0',
  `ashish` int(3) NOT NULL DEFAULT '0',
  `benny` int(3) NOT NULL DEFAULT '0',
  `chandan` int(3) NOT NULL DEFAULT '0',
  `deepanjan` int(3) NOT NULL DEFAULT '0',
  `diganta` int(3) NOT NULL DEFAULT '0',
  `sajith` int(3) NOT NULL DEFAULT '0',
  `gautam` int(3) NOT NULL DEFAULT '0',
  `hemangee` int(3) NOT NULL DEFAULT '0',
  `jatindra` int(3) NOT NULL DEFAULT '0',
  `john` int(3) NOT NULL DEFAULT '0',
  `pinaki` int(3) NOT NULL DEFAULT '0',
  `pradip` int(3) NOT NULL DEFAULT '0',
  `purandar` int(3) NOT NULL DEFAULT '0',
  `inkulu` int(3) NOT NULL DEFAULT '0',
  `rashmi` int(3) NOT NULL DEFAULT '0',
  `svrao` int(3) NOT NULL DEFAULT '0',
  `samit` int(3) NOT NULL DEFAULT '0',
  `sanasam` int(3) NOT NULL DEFAULT '0',
  `santosh` int(3) NOT NULL DEFAULT '0',
  `shivashankar` int(3) NOT NULL DEFAULT '0',
  `sukumar` int(3) NOT NULL DEFAULT '0',
  `sushanta` int(3) NOT NULL DEFAULT '0',
  `venkatesh` int(3) NOT NULL DEFAULT '0',
  `vijaya` int(3) NOT NULL DEFAULT '0',
  `counter` int(5) NOT NULL DEFAULT '0',
  `HOD` int(3) NOT NULL DEFAULT '0',
  `FINANCE` int(3) NOT NULL DEFAULT '0',
  `ACADEMIC` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `position`, `DLAB`, `DLIB`, `THESIS`, `GUIDE`, `LIB`, `CARETAKER`, `WARDEN`, `GYMKHANA`, `aREGISTRAR`, `ONCC`, `INCC`, `WORK`, `QIP`, `amit`, `arijit`, `arnab`, `aryabartta`, `ashish`, `benny`, `chandan`, `deepanjan`, `diganta`, `sajith`, `gautam`, `hemangee`, `jatindra`, `john`, `pinaki`, `pradip`, `purandar`, `inkulu`, `rashmi`, `svrao`, `samit`, `sanasam`, `santosh`, `shivashankar`, `sukumar`, `sushanta`, `venkatesh`, `vijaya`, `counter`, `HOD`, `FINANCE`, `ACADEMIC`) VALUES
('nikunj', 'nikunj', 'student', 1, 1, 1, 1, 2, 1, 0, 1, 0, 2, 2, 1, 1, 2, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 10, 0, 0, 0),
('mayank', 'R', 'student', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 0, 0, 0),
('harshit', 'harshit', 'student', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 82, 0, 1, 0),
('student1', 'student1', 'student', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0),
('student2', 'student2', 'student', 2, 2, 2, 2, 2, 2, 0, 2, 0, 2, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 76, 0, 0, 0),
('student3', 'student3', 'student', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 82, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
