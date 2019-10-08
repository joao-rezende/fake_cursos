--
-- PostgreSQL database dump
--

-- Dumped from database version 10.10 (Ubuntu 10.10-1.pgdg18.04+1)
-- Dumped by pg_dump version 11.5 (Ubuntu 11.5-1.pgdg18.04+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: courses_course_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.courses_course_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.courses_course_id_seq OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: courses; Type: TABLE; Schema: public; Owner: fake
--

CREATE TABLE public.courses (
    course_id integer DEFAULT nextval('public.courses_course_id_seq'::regclass) NOT NULL,
    course_name character varying(100) NOT NULL,
    course_img character varying(100),
    course_duration numeric(3,1) NOT NULL,
    course_description text DEFAULT ''::text
);


ALTER TABLE public.courses OWNER TO fake;

--
-- Name: team_member_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.team_member_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.team_member_id_seq OWNER TO postgres;

--
-- Name: team; Type: TABLE; Schema: public; Owner: fake
--

CREATE TABLE public.team (
    member_id integer DEFAULT nextval('public.team_member_id_seq'::regclass) NOT NULL,
    member_name character varying(100) NOT NULL,
    memeber_photo character varying(100),
    member_description text DEFAULT ''::text
);


ALTER TABLE public.team OWNER TO fake;

--
-- Name: users_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_user_id_seq OWNER TO postgres;

--
-- Name: users; Type: TABLE; Schema: public; Owner: fake
--

CREATE TABLE public.users (
    user_id integer DEFAULT nextval('public.users_user_id_seq'::regclass) NOT NULL,
    user_login character varying(30) NOT NULL,
    password_hash character varying(255) NOT NULL,
    user_full_name character varying(100) NOT NULL,
    user_email character varying(100) NOT NULL
);


ALTER TABLE public.users OWNER TO fake;

--
-- Name: courses courses_pkey; Type: CONSTRAINT; Schema: public; Owner: fake
--

ALTER TABLE ONLY public.courses
    ADD CONSTRAINT courses_pkey PRIMARY KEY (course_id);


--
-- Name: team team_pkey; Type: CONSTRAINT; Schema: public; Owner: fake
--

ALTER TABLE ONLY public.team
    ADD CONSTRAINT team_pkey PRIMARY KEY (member_id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: fake
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (user_id);


--
-- PostgreSQL database dump complete
--

