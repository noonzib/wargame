-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 19-06-18 03:22
-- 서버 버전: 10.3.15-MariaDB
-- PHP 버전: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `wargame`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `prob`
--

CREATE TABLE `prob` (
  `title` varchar(40) NOT NULL COMMENT '문제 제목',
  `score` int(40) NOT NULL COMMENT '문제 점수',
  `text` varchar(456) NOT NULL COMMENT '문제 택스트',
  `track` varchar(256) NOT NULL COMMENT '문제 트랙',
  `flag` varchar(256) NOT NULL COMMENT '문제 플래그',
  `author` varchar(256) NOT NULL COMMENT '문제 만든이'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='문제 테이블';

-- --------------------------------------------------------

--
-- 테이블 구조 `user`
--

CREATE TABLE `user` (
  `id` varchar(40) NOT NULL COMMENT '사용자 id',
  `pw` varchar(256) NOT NULL COMMENT '사용자 password',
  `score` int(11) NOT NULL DEFAULT 0 COMMENT '사용자 점수',
  `time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '최근 업데이트 시간'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `user`
--

INSERT INTO `user` (`id`, `pw`, `score`, `time`) VALUES
('admin', 'adminroot', 0, '2019-06-18 01:18:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
