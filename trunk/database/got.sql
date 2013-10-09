begin;
CREATE TABLE usuario (
    id_usuario integer NOT NULL,
    nome_usuario character varying(50) NOT NULL,
    login_usuario character varying(20) NOT NULL,
    passwd_usuario character varying(20) NOT NULL,
    status_usuario boolean NOT NULL,
    tipo_usuario character varying(1) NOT NULL
);
ALTER TABLE public.usuario OWNER TO got;

CREATE SEQUENCE id_usuario_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
ALTER TABLE public.id_usuario_seq OWNER TO got;
ALTER SEQUENCE id_usuario_seq OWNED BY usuario.id_usuario;

ALTER TABLE ONLY usuario ALTER COLUMN id_usuario SET DEFAULT nextval('id_usuario_seq'::regclass);
ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id_usuario);
end;