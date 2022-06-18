--
-- PostgreSQL database dump
--

-- Dumped from database version 12.9 (Ubuntu 12.9-0ubuntu0.20.04.1)
-- Dumped by pg_dump version 12.9 (Ubuntu 12.9-0ubuntu0.20.04.1)

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: tbadmin; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbadmin (
    aemail character varying,
    apass character varying
);


ALTER TABLE public.tbadmin OWNER TO postgres;

--
-- Name: tbcart; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbcart (
    qty integer,
    custid integer,
    pid integer,
    cartid integer NOT NULL
);


ALTER TABLE public.tbcart OWNER TO postgres;

--
-- Name: tbcart_cartid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tbcart_cartid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbcart_cartid_seq OWNER TO postgres;

--
-- Name: tbcart_cartid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tbcart_cartid_seq OWNED BY public.tbcart.cartid;


--
-- Name: tbcategory; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbcategory (
    catname character varying(20) NOT NULL,
    cid integer NOT NULL
);


ALTER TABLE public.tbcategory OWNER TO postgres;

--
-- Name: tbcategory_cid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tbcategory_cid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbcategory_cid_seq OWNER TO postgres;

--
-- Name: tbcategory_cid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tbcategory_cid_seq OWNED BY public.tbcategory.cid;


--
-- Name: tbcustomer; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbcustomer (
    cname character varying(20) NOT NULL,
    cpass character varying(30) NOT NULL,
    cemail character varying(15),
    cgender character varying,
    custid integer NOT NULL,
    caddr text,
    ccon bigint
);


ALTER TABLE public.tbcustomer OWNER TO postgres;

--
-- Name: tbcustomer_custid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tbcustomer_custid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbcustomer_custid_seq OWNER TO postgres;

--
-- Name: tbcustomer_custid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tbcustomer_custid_seq OWNED BY public.tbcustomer.custid;


--
-- Name: tbfeedback; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbfeedback (
    cname character varying(20),
    fdesc text NOT NULL,
    custid integer NOT NULL
);


ALTER TABLE public.tbfeedback OWNER TO postgres;

--
-- Name: tbldemo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbldemo (
    uname text
);


ALTER TABLE public.tbldemo OWNER TO postgres;

--
-- Name: tbproduct; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbproduct (
    pname character varying(20) NOT NULL,
    pdprice numeric(10,2) NOT NULL,
    pdisc text NOT NULL,
    pprice numeric,
    pstock integer,
    pid integer NOT NULL,
    pimage text,
    cid integer
);


ALTER TABLE public.tbproduct OWNER TO postgres;

--
-- Name: tbproduct_pid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tbproduct_pid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbproduct_pid_seq OWNER TO postgres;

--
-- Name: tbproduct_pid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tbproduct_pid_seq OWNED BY public.tbproduct.pid;


--
-- Name: tbcart cartid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbcart ALTER COLUMN cartid SET DEFAULT nextval('public.tbcart_cartid_seq'::regclass);


--
-- Name: tbcategory cid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbcategory ALTER COLUMN cid SET DEFAULT nextval('public.tbcategory_cid_seq'::regclass);


--
-- Name: tbcustomer custid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbcustomer ALTER COLUMN custid SET DEFAULT nextval('public.tbcustomer_custid_seq'::regclass);


--
-- Name: tbproduct pid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbproduct ALTER COLUMN pid SET DEFAULT nextval('public.tbproduct_pid_seq'::regclass);


--
-- Data for Name: tbadmin; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tbadmin VALUES ('admin', 'admin');
INSERT INTO public.tbadmin VALUES ('admin@gmail.com', 'admin');


--
-- Data for Name: tbcart; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tbcart VALUES (1, 2, 1, 3);
INSERT INTO public.tbcart VALUES (2, 8, 4, 13);
INSERT INTO public.tbcart VALUES (1, 9, 4, 14);
INSERT INTO public.tbcart VALUES (2, 10, 4, 15);
INSERT INTO public.tbcart VALUES (1, 11, 4, 16);
INSERT INTO public.tbcart VALUES (3, 15, 4, 26);
INSERT INTO public.tbcart VALUES (2, 16, 7, 28);
INSERT INTO public.tbcart VALUES (5, 16, 7, 29);
INSERT INTO public.tbcart VALUES (95, 16, 7, 30);
INSERT INTO public.tbcart VALUES (1, 2, 8, 31);


--
-- Data for Name: tbcategory; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tbcategory VALUES ('aa', 1);
INSERT INTO public.tbcategory VALUES ('cake', 2);
INSERT INTO public.tbcategory VALUES ('pastry', 3);
INSERT INTO public.tbcategory VALUES ('cake', 4);
INSERT INTO public.tbcategory VALUES ('cake', 5);
INSERT INTO public.tbcategory VALUES ('cookies', 6);
INSERT INTO public.tbcategory VALUES ('cream roll', 7);
INSERT INTO public.tbcategory VALUES ('bread', 8);


--
-- Data for Name: tbcustomer; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tbcustomer VALUES ('sukrut', 'sukrut', 'suk@gmail.com', 'Male', 2, NULL, NULL);
INSERT INTO public.tbcustomer VALUES ('aditi', 'adi', 'ad@gmail.com', 'Male', 14, 'singapur', 7894561231);
INSERT INTO public.tbcustomer VALUES ('aman', '123', 'q@gmail.om', 'Male', 15, 'pune', 4567891234);
INSERT INTO public.tbcustomer VALUES ('punam', 'punam', 'punam@gmail.com', 'Female', 16, 'Dhule', 7391867951);
INSERT INTO public.tbcustomer VALUES ('bhavesh', '123', 'b@gmail.com', 'Male', 17, 'mumbai', 5555555555);


--
-- Data for Name: tbfeedback; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tbfeedback VALUES (NULL, '				best
', 14);
INSERT INTO public.tbfeedback VALUES (NULL, '				good product', 15);
INSERT INTO public.tbfeedback VALUES (NULL, '			good cookies	', 16);
INSERT INTO public.tbfeedback VALUES (NULL, 'best cake				', 17);
INSERT INTO public.tbfeedback VALUES (NULL, '				fjhkhkgjgjgj', 17);


--
-- Data for Name: tbldemo; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES (NULL);
INSERT INTO public.tbldemo VALUES ('randomvalue');


--
-- Data for Name: tbproduct; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.tbproduct VALUES ('chocolate cake', 400.00, '1 kg', 500, 15, 4, 'uploads/cake3.jpg', 2);
INSERT INTO public.tbproduct VALUES ('Pineapple pastry', 65.00, 'pine apple 1', 70, 10, 5, 'uploads/2.jpeg', 3);
INSERT INTO public.tbproduct VALUES ('cake 1', 400.00, 'awesome cake', 450, 6, 6, 'uploads/image9.jpg', 4);
INSERT INTO public.tbproduct VALUES ('chocolate cookie', 40.00, 'chocolate', 50, 100, 7, 'uploads/cookie1.jpg', 6);
INSERT INTO public.tbproduct VALUES ('macaroon cookie', 75.00, 'macaroon', 90, 50, 8, 'uploads/cookie2.jpg', 6);
INSERT INTO public.tbproduct VALUES ('biscotti', 35.00, 'biscotti', 40, 25, 9, 'uploads/cookie3.jpg', 6);
INSERT INTO public.tbproduct VALUES ('chocolate cream roll', 30.00, 'chocolate cream roll', 45, 40, 10, 'uploads/cream1.jpg', 7);
INSERT INTO public.tbproduct VALUES ('brown bread', 20.00, 'brown bread
', 25, 10, 11, 'uploads/bread.jpg', 8);


--
-- Name: tbcart_cartid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tbcart_cartid_seq', 37, true);


--
-- Name: tbcategory_cid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tbcategory_cid_seq', 8, true);


--
-- Name: tbcustomer_custid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tbcustomer_custid_seq', 17, true);


--
-- Name: tbproduct_pid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tbproduct_pid_seq', 11, true);


--
-- Name: tbcustomer tbcustomer_cemail_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbcustomer
    ADD CONSTRAINT tbcustomer_cemail_key UNIQUE (cemail);


--
-- Name: tbcustomer tbcustomer_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbcustomer
    ADD CONSTRAINT tbcustomer_pkey PRIMARY KEY (custid);


--
-- Name: tbproduct tbproduct_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbproduct
    ADD CONSTRAINT tbproduct_pkey PRIMARY KEY (pid);


--
-- Name: tbfeedback tbfeedback_custid_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbfeedback
    ADD CONSTRAINT tbfeedback_custid_fkey FOREIGN KEY (custid) REFERENCES public.tbcustomer(custid);


--
-- PostgreSQL database dump complete
--

