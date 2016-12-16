drop table if exists ACTORES;

drop table if exists EMPRESA_CABECERA;

drop table if exists EMPRESA_DETALLE;

drop table if exists ESTUDIO;

drop table if exists ESTUDIO_EMPRESA;

drop table if exists ROLES;

drop table if exists SOURCE;

drop table if exists TIPO;

drop table if exists USUARIOS;

/*==============================================================*/
/* Table: ACTORES                                               */
/*==============================================================*/
create table ACTORES
(
   ID_CLIENTE           varchar(255) not null,
   ID_USUARIO           varchar(100),
   N_CLIENTE            varchar(255),
   RUC                  varchar(100),
   primary key (ID_CLIENTE)
);

/*==============================================================*/
/* Table: EMPRESA_CABECERA                                      */
/*==============================================================*/
create table EMPRESA_CABECERA
(
   ID_DATA              int not null auto_increment,
   ID_SOURCE            int,
   S_BVDEP_ID_NUMBER    varchar(255),
   S_NAME               text,
   S_ISOCOUNTRY_INC     text,
   S_LONGBUSDESC        text,
   S_TRADEDES           text,
   S_SIC                text,
   S_DATEINC            date,
   S_URL                text,
   S_DATE_UPDATE        date,
   primary key (ID_DATA)
);

/*==============================================================*/
/* Table: EMPRESA_DETALLE                                       */
/*==============================================================*/
create table EMPRESA_DETALLE
(
   ID_DATA              int,
   S_ADV_EXP            double,
   S_AMORT              double,
   S_AP                 double,
   S_AR                 double,
   S_AR_TRADE           double,
   S_CA_OTHER           double,
   S_CASH_STI           double,
   S_CL_OTHER           double,
   S_COGS_IMPORT        double,
   S_DA_IS              double,
   S_DCL                double,
   S_FISCYEAR           int,
   S_GOODWILL           double,
   S_IEQ                double,
   S_ININC_TOT          double,
   S_INT                double,
   S_INT_OTHER          double,
   S_INTEX              double,
   S_INV                double,
   S_IOM                double,
   S_ISOCURRENCY        varchar(10),
   S_IT                 double,
   S_IT_PAYABLE         double,
   S_LIFOR              double,
   S_LTD                double,
   S_MONTHENDYH         double,
   S_NON_OPINIC         double,
   S_OA                 double,
   S_OL                 double,
   S_OP_IMPORT          double,
   S_PENSION_PERIODCOST double,
   S_PENSION_SERVCOST   double,
   S_POSTR_PERIODCOST   double,
   S_POSTR_SERVCOST     double,
   S_PPE_NET            double,
   S_RD                 double,
   S_REC_Z_RATE         double,
   S_SE                 double,
   S_SGA_IMPORT         double,
   S_SPI                double
);

/*==============================================================*/
/* Table: ESTUDIO                                               */
/*==============================================================*/
create table ESTUDIO
(
   ID_ESTUDIO           int not null auto_increment,
   ID_USUARIO           varchar(100),
   ID_SOURCE            int,
   ID_CLIENTE           varchar(255),
   ID_TIPO              int,
   NUM_COM_COMP         int,
   FISCALYEAR           int,
   FECHA_INI            date,
   FECHA_FIN            date,
   ANIOS_ESTUDIO        int,
   primary key (ID_ESTUDIO)
);

/*==============================================================*/
/* Table: ESTUDIO_EMPRESA                                       */
/*==============================================================*/
create table ESTUDIO_EMPRESA
(
   ID_ESTUDIO           int not null,
   ID_DATA              int not null,
   primary key (ID_ESTUDIO, ID_DATA)
);

/*==============================================================*/
/* Table: ROLES                                                 */
/*==============================================================*/
create table ROLES
(
   ID_ROL               int not null auto_increment,
   N_ROL                varchar(255),
   primary key (ID_ROL)
);

/*==============================================================*/
/* Table: SOURCE                                                */
/*==============================================================*/
create table SOURCE
(
   ID_SOURCE            int not null auto_increment,
   N_SOURCE             varchar(255),
   DATE_SOURCE          date,
   primary key (ID_SOURCE)
);

/*==============================================================*/
/* Table: TIPO                                                  */
/*==============================================================*/
create table TIPO
(
   ID_TIPO              int not null auto_increment,
   N_TIPO               varchar(255),
   primary key (ID_TIPO)
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS
(
   ID_USUARIO           varchar(100) not null,
   ID_ROL               int,
   NOMBRES              varchar(200),
   CLAVE                varchar(50),
   primary key (ID_USUARIO)
);

alter table ACTORES add constraint FK_USUARIO_ACTOR foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO) on delete restrict on update restrict;

alter table EMPRESA_CABECERA add constraint FK_FUENTE_EMPRESA foreign key (ID_SOURCE)
      references SOURCE (ID_SOURCE) on delete restrict on update restrict;

alter table EMPRESA_DETALLE add constraint FK_EMPRESA_CABECERA_DETALLE foreign key (ID_DATA)
      references EMPRESA_CABECERA (ID_DATA) on delete restrict on update restrict;

alter table ESTUDIO add constraint FK_ACTORES_ESTUDIO foreign key (ID_CLIENTE)
      references ACTORES (ID_CLIENTE) on delete restrict on update restrict;

alter table ESTUDIO add constraint FK_FUENTE_ESTUDIO foreign key (ID_SOURCE)
      references SOURCE (ID_SOURCE) on delete restrict on update restrict;

alter table ESTUDIO add constraint FK_TIPO_ESTUDIO foreign key (ID_TIPO)
      references TIPO (ID_TIPO) on delete restrict on update restrict;

alter table ESTUDIO add constraint FK_USUARIO_ESTUDIO foreign key (ID_USUARIO)
      references USUARIOS (ID_USUARIO) on delete restrict on update restrict;

alter table ESTUDIO_EMPRESA add constraint FK_ESTUDIO_EMPRESA foreign key (ID_ESTUDIO)
      references ESTUDIO (ID_ESTUDIO) on delete restrict on update restrict;

alter table ESTUDIO_EMPRESA add constraint FK_ESTUDIO_EMPRESA2 foreign key (ID_DATA)
      references EMPRESA_CABECERA (ID_DATA) on delete restrict on update restrict;

alter table USUARIOS add constraint FK_USUARIO_ROL foreign key (ID_ROL)
      references ROLES (ID_ROL) on delete restrict on update restrict;
