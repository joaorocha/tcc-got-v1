begin;

--
-- PostgreSQL database dump
-- Dump do banco com as tabelas e os dados de Casas e Mentores
-- TODO: Incluir dados dos itens e Missões
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: casa; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE casa (
    id_casa integer NOT NULL,
    nome_casa character varying(45) NOT NULL,
    localizacao_casa character varying(40),
    qtd_jogadores_casa integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.casa OWNER TO got;

--
-- Name: casa_id_casa_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE casa_id_casa_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.casa_id_casa_seq OWNER TO got;

--
-- Name: casa_id_casa_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE casa_id_casa_seq OWNED BY casa.id_casa;


--
-- Name: item; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE item (
    id_item integer NOT NULL,
    nome_item character varying(45) NOT NULL,
    descricao_item text,
    min_lvl_item integer DEFAULT 1 NOT NULL,
    forca_item integer DEFAULT 0 NOT NULL,
    vitalidade_item integer DEFAULT 0 NOT NULL,
    inteligencia_item integer DEFAULT 0 NOT NULL,
    agilidade_item integer DEFAULT 0 NOT NULL,
    defesa_item integer DEFAULT 0 NOT NULL,
    preco_item integer DEFAULT 1 NOT NULL
);


ALTER TABLE public.item OWNER TO got;

--
-- Name: item_id_item_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE item_id_item_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.item_id_item_seq OWNER TO got;

--
-- Name: item_id_item_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE item_id_item_seq OWNED BY item.id_item;


--
-- Name: level; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE level (
    id_level integer NOT NULL,
    min_xp integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.level OWNER TO got;

--
-- Name: level_id_level_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE level_id_level_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.level_id_level_seq OWNER TO got;

--
-- Name: level_id_level_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE level_id_level_seq OWNED BY level.id_level;


--
-- Name: mentor; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE mentor (
    id_mentor integer NOT NULL,
    nome_mentor character varying(45) NOT NULL,
    id_casa integer NOT NULL,
    id_vantagem integer NOT NULL
);


ALTER TABLE public.mentor OWNER TO got;

--
-- Name: mentor_id_mentor_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE mentor_id_mentor_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.mentor_id_mentor_seq OWNER TO got;

--
-- Name: mentor_id_mentor_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE mentor_id_mentor_seq OWNED BY mentor.id_mentor;


--
-- Name: missao; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE missao (
    id_missao integer NOT NULL,
    nome_missao character varying(45) DEFAULT NULL::character varying,
    descricao_missao text,
    duracao_missao integer DEFAULT 1 NOT NULL,
    min_xp_missao integer DEFAULT 1 NOT NULL,
    max_xp_missao integer DEFAULT 2 NOT NULL,
    min_gold_missao integer DEFAULT 0 NOT NULL,
    max_gold_missao integer DEFAULT 1 NOT NULL
);


ALTER TABLE public.missao OWNER TO got;

--
-- Name: COLUMN missao.duracao_missao; Type: COMMENT; Schema: public; Owner: got
--

COMMENT ON COLUMN missao.duracao_missao IS 'duração em segundos';


--
-- Name: missao_controle; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE missao_controle (
    id_personagem integer NOT NULL,
    id_missao integer NOT NULL,
    hora_inicio_missao time without time zone,
    hora_fim_missao time without time zone
);


ALTER TABLE public.missao_controle OWNER TO got;

--
-- Name: missao_id_missao_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE missao_id_missao_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.missao_id_missao_seq OWNER TO got;

--
-- Name: missao_id_missao_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE missao_id_missao_seq OWNED BY missao.id_missao;


--
-- Name: noticia; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE noticia (
    id_noticia integer NOT NULL,
    titulo_noticia character varying(45) NOT NULL,
    texto_noticia text NOT NULL,
    data_noticia date NOT NULL,
    tipo_noticia character varying(45)
);


ALTER TABLE public.noticia OWNER TO got;

--
-- Name: noticia_id_noticia_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE noticia_id_noticia_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.noticia_id_noticia_seq OWNER TO got;

--
-- Name: noticia_id_noticia_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE noticia_id_noticia_seq OWNED BY noticia.id_noticia;


--
-- Name: personagem; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE personagem (
    id_personagem integer NOT NULL,
    nome_personagem character varying(45) NOT NULL,
    gold_personagem integer DEFAULT 0 NOT NULL,
    xp_personagem integer DEFAULT 0 NOT NULL,
    id_level integer DEFAULT 1 NOT NULL,
    id_mentor integer,
    id_casa integer,
    id_item integer,
    id_usuario integer NOT NULL,
    forca_personagem integer DEFAULT 1 NOT NULL,
    inteligencia_personagem integer DEFAULT 1 NOT NULL,
    vitalidade_personagem integer DEFAULT 1 NOT NULL,
    agilidade_personagem integer DEFAULT 1 NOT NULL,
    defesa_personagem integer DEFAULT 1 NOT NULL
);


ALTER TABLE public.personagem OWNER TO got;

--
-- Name: personagem_id_personagem_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE personagem_id_personagem_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.personagem_id_personagem_seq OWNER TO got;

--
-- Name: personagem_id_personagem_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE personagem_id_personagem_seq OWNED BY personagem.id_personagem;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE usuario (
    id_usuario integer NOT NULL,
    nome_usuario character varying(50) NOT NULL
    login_usuario character varying(20) NOT NULL,
    passwd_usuario character varying(64) NOT NULL,
    status_usuario boolean DEFAULT true NOT NULL,
    email_usuario character varying(60) NOT NULL,
    tipo_usuario boolean DEFAULT true NOT NULL,
);


ALTER TABLE public.usuario OWNER TO got;

--
-- Name: COLUMN usuario.tipo_usuario; Type: COMMENT; Schema: public; Owner: got
--

COMMENT ON COLUMN usuario.tipo_usuario IS 'true para usuário comum e false pra administrador';


--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE usuario_id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_usuario_seq OWNER TO got;

--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE usuario_id_usuario_seq OWNED BY usuario.id_usuario;


--
-- Name: vantagem; Type: TABLE; Schema: public; Owner: got; Tablespace: 
--

CREATE TABLE vantagem (
    id_vantagem integer NOT NULL,
    descricao_vantagem text,
    gold_vantagem integer DEFAULT 0 NOT NULL,
    forca_vantagem integer DEFAULT 0 NOT NULL,
    vitalidade_vantagem integer DEFAULT 0 NOT NULL,
    inteligencia_vantagem integer DEFAULT 0 NOT NULL,
    agilidade_vantagem integer DEFAULT 0 NOT NULL,
    defesa_vantagem integer DEFAULT 0 NOT NULL
);


ALTER TABLE public.vantagem OWNER TO got;

--
-- Name: vantagem_id_vantagem_seq; Type: SEQUENCE; Schema: public; Owner: got
--

CREATE SEQUENCE vantagem_id_vantagem_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.vantagem_id_vantagem_seq OWNER TO got;

--
-- Name: vantagem_id_vantagem_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: got
--

ALTER SEQUENCE vantagem_id_vantagem_seq OWNED BY vantagem.id_vantagem;


--
-- Name: id_casa; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY casa ALTER COLUMN id_casa SET DEFAULT nextval('casa_id_casa_seq'::regclass);


--
-- Name: id_item; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY item ALTER COLUMN id_item SET DEFAULT nextval('item_id_item_seq'::regclass);


--
-- Name: id_level; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY level ALTER COLUMN id_level SET DEFAULT nextval('level_id_level_seq'::regclass);


--
-- Name: id_mentor; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY mentor ALTER COLUMN id_mentor SET DEFAULT nextval('mentor_id_mentor_seq'::regclass);


--
-- Name: id_missao; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY missao ALTER COLUMN id_missao SET DEFAULT nextval('missao_id_missao_seq'::regclass);


--
-- Name: id_noticia; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY noticia ALTER COLUMN id_noticia SET DEFAULT nextval('noticia_id_noticia_seq'::regclass);


--
-- Name: id_personagem; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY personagem ALTER COLUMN id_personagem SET DEFAULT nextval('personagem_id_personagem_seq'::regclass);


--
-- Name: id_usuario; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY usuario ALTER COLUMN id_usuario SET DEFAULT nextval('usuario_id_usuario_seq'::regclass);


--
-- Name: id_vantagem; Type: DEFAULT; Schema: public; Owner: got
--

ALTER TABLE ONLY vantagem ALTER COLUMN id_vantagem SET DEFAULT nextval('vantagem_id_vantagem_seq'::regclass);


--
-- Data for Name: casa; Type: TABLE DATA; Schema: public; Owner: got
--

COPY casa (id_casa, nome_casa, localizacao_casa, qtd_jogadores_casa) FROM stdin;
1	Stark	\N	0
2	Lannister	\N	0
3	Baratheon	\N	0
4	Greyjoy	\N	0
5	Targaryen	\N	0
6	Tyrell	\N	0
\.


--
-- Name: casa_id_casa_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('casa_id_casa_seq', 7, true);


--
-- Data for Name: item; Type: TABLE DATA; Schema: public; Owner: got
--

COPY item (id_item, nome_item, descricao_item, min_lvl_item, forca_item, vitalidade_item, inteligencia_item, agilidade_item, defesa_item, preco_item) FROM stdin;
\.


--
-- Name: item_id_item_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('item_id_item_seq', 1, false);


--
-- Data for Name: level; Type: TABLE DATA; Schema: public; Owner: got
--

COPY level (id_level, min_xp) FROM stdin;
1	5
2	15
3	30
4	50
5	75
6	100
7	140
8	180
9	225
10	275
11	330
12	390
13	455
14	525
15	600
16	680
17	765
18	855
19	950
20	1050
21	1155
22	1265
23	1380
24	1500
25	1625
26	1755
27	1890
28	2030
29	2175
30	2325
31	2480
32	2640
33	2805
34	2975
35	3150
36	3330
37	3515
38	3705
39	3900
40	4100
41	4305
42	4515
43	4730
44	4950
45	5175
46	5405
47	5640
48	5880
49	6125
\.


--
-- Name: level_id_level_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('level_id_level_seq', 49, false);


--
-- Data for Name: mentor; Type: TABLE DATA; Schema: public; Owner: got
--

COPY mentor (id_mentor, nome_mentor, id_casa, id_vantagem) FROM stdin;
1	Ned	1	1
2	Catelyn	1	2
3	Rob	1	3
4	Tywin	2	4
5	Tyrion	2	5
6	Jaime	2	6
7	Robert	3	7
8	Renly	3	8
9	Stannis	3	9
10	Balon	4	10
11	Theon	4	11
12	Asha	4	12
13	Aerys	5	13
14	Daenerys	5	14
15	Viserys	5	15
16	Olena	6	16
17	Loras	6	17
18	Margery	6	18
\.


--
-- Name: mentor_id_mentor_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('mentor_id_mentor_seq', 18, true);


--
-- Data for Name: missao; Type: TABLE DATA; Schema: public; Owner: got
--

COPY missao (id_missao, nome_missao, descricao_missao, duracao_missao, min_xp_missao, max_xp_missao, min_gold_missao, max_gold_missao) FROM stdin;
1	Terminar o TCC	Missão em que se deve terminar o tcc	120	1	8000	100	200
2	Matar o Mufasa	Matar aquele fdp	300	10	20	0	50
\.


--
-- Data for Name: missao_controle; Type: TABLE DATA; Schema: public; Owner: got
--

COPY missao_controle (id_personagem, id_missao, hora_inicio_missao, hora_fim_missao) FROM stdin;
\.


--
-- Name: missao_id_missao_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('missao_id_missao_seq', 2, true);


--
-- Data for Name: noticia; Type: TABLE DATA; Schema: public; Owner: got
--

COPY noticia (id_noticia, titulo_noticia, texto_noticia, data_noticia, tipo_noticia) FROM stdin;
\.


--
-- Name: noticia_id_noticia_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('noticia_id_noticia_seq', 1, false);


--
-- Data for Name: personagem; Type: TABLE DATA; Schema: public; Owner: got
--

COPY personagem (id_personagem, nome_personagem, gold_personagem, xp_personagem, id_level, id_mentor, id_usuario, forca_personagem, inteligencia_personagem, vitalidade_personagem, agilidade_personagem, defesa_personagem, id_casa, id_item) FROM stdin;
\.


--
-- Name: personagem_id_personagem_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('personagem_id_personagem_seq', 1, true);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: got
--

COPY usuario (nome_usuario, login_usuario, passwd_usuario, status_usuario, email_usuario, tipo_usuario, id_usuario) FROM stdin;
\.


--
-- Name: usuario_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('usuario_id_usuario_seq', 1, true);


--
-- Data for Name: vantagem; Type: TABLE DATA; Schema: public; Owner: got
--

COPY vantagem (id_vantagem, descricao_vantagem, gold_vantagem, forca_vantagem, vitalidade_vantagem, inteligencia_vantagem, agilidade_vantagem, defesa_vantagem) FROM stdin;
1	\N	300	7	0	3	0	0
2	\N	300	5	3	2	0	0
3	\N	300	9	1	0	0	0
4	\N	900	6	2	0	2	0
5	\N	1000	3	0	5	2	0
6	\N	900	6	1	0	3	0
7	\N	600	6	3	0	1	0
8	\N	600	6	2	0	2	0
9	\N	600	6	2	0	2	0
10	\N	300	6	2	2	0	0
11	\N	200	6	2	1	1	0
12	\N	300	5	2	1	2	0
13	\N	450	5	2	3	0	0
14	\N	450	5	3	2	0	0
15	\N	450	4	2	3	1	0
16	\N	600	3	1	6	0	0
17	\N	600	6	1	2	1	0
18	\N	600	4	2	4	0	0
\.


--
-- Name: vantagem_id_vantagem_seq; Type: SEQUENCE SET; Schema: public; Owner: got
--

SELECT pg_catalog.setval('vantagem_id_vantagem_seq', 18, true);


--
-- Name: casa_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY casa
    ADD CONSTRAINT casa_pkey PRIMARY KEY (id_casa);


--
-- Name: item_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY item
    ADD CONSTRAINT item_pkey PRIMARY KEY (id_item);


--
-- Name: level_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY level
    ADD CONSTRAINT level_pkey PRIMARY KEY (id_level);


--
-- Name: mentor_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY mentor
    ADD CONSTRAINT mentor_pkey PRIMARY KEY (id_mentor);


--
-- Name: missao_controle_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY missao_controle
    ADD CONSTRAINT missao_controle_pkey PRIMARY KEY (id_personagem, id_missao);


--
-- Name: missao_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY missao
    ADD CONSTRAINT missao_pkey PRIMARY KEY (id_missao);


--
-- Name: noticia_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY noticia
    ADD CONSTRAINT noticia_pkey PRIMARY KEY (id_noticia);


--
-- Name: personagem_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY personagem
    ADD CONSTRAINT personagem_pkey PRIMARY KEY (id_personagem);


--
-- Name: usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);


--
-- Name: vantagem_pkey; Type: CONSTRAINT; Schema: public; Owner: got; Tablespace: 
--

ALTER TABLE ONLY vantagem
    ADD CONSTRAINT vantagem_pkey PRIMARY KEY (id_vantagem);


--
-- Name: mentor_id_casa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: got
--

ALTER TABLE ONLY mentor
    ADD CONSTRAINT mentor_id_casa_fkey FOREIGN KEY (id_casa) REFERENCES casa(id_casa);


--
-- Name: missao_controle_id_missao_fkey; Type: FK CONSTRAINT; Schema: public; Owner: got
--

ALTER TABLE ONLY missao_controle
    ADD CONSTRAINT missao_controle_id_missao_fkey FOREIGN KEY (id_missao) REFERENCES missao(id_missao);


--
-- Name: missao_controle_id_personagem_fkey; Type: FK CONSTRAINT; Schema: public; Owner: got
--

ALTER TABLE ONLY missao_controle
    ADD CONSTRAINT missao_controle_id_personagem_fkey FOREIGN KEY (id_personagem) REFERENCES personagem(id_personagem);


--
-- Name: personagem_id_casa_fkey; Type: FK CONSTRAINT; Schema: public; Owner: got
--

ALTER TABLE ONLY personagem
    ADD CONSTRAINT personagem_id_casa_fkey FOREIGN KEY (id_casa) REFERENCES casa(id_casa);


--
-- Name: personagem_id_item_fkey; Type: FK CONSTRAINT; Schema: public; Owner: got
--

ALTER TABLE ONLY personagem
    ADD CONSTRAINT personagem_id_item_fkey FOREIGN KEY (id_item) REFERENCES item(id_item);


--
-- Name: personagem_id_level_fkey; Type: FK CONSTRAINT; Schema: public; Owner: got
--

ALTER TABLE ONLY personagem
    ADD CONSTRAINT personagem_id_level_fkey FOREIGN KEY (id_level) REFERENCES level(id_level);


--
-- Name: personagem_id_mentor_fkey; Type: FK CONSTRAINT; Schema: public; Owner: got
--

ALTER TABLE ONLY personagem
    ADD CONSTRAINT personagem_id_mentor_fkey FOREIGN KEY (id_mentor) REFERENCES mentor(id_mentor);


--
-- Name: personagem_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: got
--

ALTER TABLE ONLY personagem
    ADD CONSTRAINT personagem_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

end;
