/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     24/06/2024 12:15:50 p.m.                     */
/*==============================================================*/


drop index REQUIERE_FK;

drop index AUDITORIA_PK;

drop table AUDITORIA;

drop index COMPETENCIAS_PK;

drop table COMPETENCIAS;

drop index CONTIENE3_FK;

drop index CONTIENE2_FK;

drop index CONTIENE_FK;

drop index CONTIENE_PK;

drop table CONTIENE;

drop index TIENE_FK;

drop index FACTORES_DE_EVALUACION_PK;

drop table FACTORES_DE_EVALUACION;

drop index EMPLEA_FK;

drop index FORMULAS_PK;

drop table FORMULAS;

drop index OBJETIVOS_PK;

drop table OBJETIVOS;

drop index PERMISOS_PK;

drop table PERMISOS;

drop index ACCEDE_FK;

drop index PLANILLA_ADMINISTRATIVO_PK;

drop table PLANILLA_ADMINISTRATIVO;

drop index GENERA_FK;

drop index PLANILLA_DESEMP_EXEP_PK;

drop table PLANILLA_DESEMP_EXEP;

drop index MANEJA_FK;

drop index PLANILLA_OBRERO_PK;

drop table PLANILLA_OBRERO;

drop index CALIFICA_FK;

drop index RANGO_DE_EVALUACION_PK;

drop table RANGO_DE_EVALUACION;

drop index RECIBE2_FK;

drop index RECIBE_FK;

drop index RECIBE_PK;

drop table RECIBE;

drop index USUARIO_PK;

drop table USUARIO;

/*==============================================================*/
/* Table: AUDITORIA                                             */
/*==============================================================*/
create table AUDITORIA (
   ID_USUARIO           NUMERIC              not null,
   ID_AUDITORIA         NUMERIC              not null,
   DESCRIPCION_AUDITORIAS TEXT                 null,
   FECHA_FIRMA          DATE                 null,
   RESULTADO            VARCHAR(1024)        null,
   ESTADO               VARCHAR(1024)        null,
   constraint PK_AUDITORIA primary key (ID_USUARIO, ID_AUDITORIA)
);

/*==============================================================*/
/* Index: AUDITORIA_PK                                          */
/*==============================================================*/
create unique index AUDITORIA_PK on AUDITORIA (
ID_USUARIO,
ID_AUDITORIA
);

/*==============================================================*/
/* Index: REQUIERE_FK                                           */
/*==============================================================*/
create  index REQUIERE_FK on AUDITORIA (
ID_USUARIO
);

/*==============================================================*/
/* Table: COMPETENCIAS                                          */
/*==============================================================*/
create table COMPETENCIAS (
   CD_COMP              NUMERIC              not null,
   NOMBRE_COMP          TEXT                 null,
   COMP_PESO            NUMERIC              null,
   COMP_RANGO           NUMERIC              null,
   COMP_PESO_X_RANGO    NUMERIC              null,
   CALIF_TOTAL_A        NUMERIC              null,
   constraint PK_COMPETENCIAS primary key (CD_COMP)
);

/*==============================================================*/
/* Index: COMPETENCIAS_PK                                       */
/*==============================================================*/
create unique index COMPETENCIAS_PK on COMPETENCIAS (
CD_COMP
);

/*==============================================================*/
/* Table: CONTIENE                                              */
/*==============================================================*/
create table CONTIENE (
   CD_OBJ               NUMERIC              not null,
   CD_COMP              NUMERIC              not null,
   ID_USUARIO           NUMERIC              not null,
   ID_PLANILLA_ADMINISTRATIVO NUMERIC              not null,
   constraint PK_CONTIENE primary key (ID_USUARIO, CD_OBJ, CD_COMP, ID_PLANILLA_ADMINISTRATIVO)
);

/*==============================================================*/
/* Index: CONTIENE_PK                                           */
/*==============================================================*/
create unique index CONTIENE_PK on CONTIENE (
ID_USUARIO,
CD_OBJ,
CD_COMP,
ID_PLANILLA_ADMINISTRATIVO
);

/*==============================================================*/
/* Index: CONTIENE_FK                                           */
/*==============================================================*/
create  index CONTIENE_FK on CONTIENE (
CD_OBJ
);

/*==============================================================*/
/* Index: CONTIENE2_FK                                          */
/*==============================================================*/
create  index CONTIENE2_FK on CONTIENE (
CD_COMP
);

/*==============================================================*/
/* Index: CONTIENE3_FK                                          */
/*==============================================================*/
create  index CONTIENE3_FK on CONTIENE (
ID_USUARIO,
ID_PLANILLA_ADMINISTRATIVO
);

/*==============================================================*/
/* Table: FACTORES_DE_EVALUACION                                */
/*==============================================================*/
create table FACTORES_DE_EVALUACION (
   ID_FE                INT4                 not null,
   ID_USUARIO           NUMERIC              null,
   ID_PLANILLA_OBRERO   NUMERIC              null,
   ASPECTOS_EVALUADOS   TEXT                 null,
   EVALUACION_GENERAL   TEXT                 null,
   PUNTAJE              NUMERIC              null,
   PUNTAJE_FINAL        NUMERIC              null,
   constraint PK_FACTORES_DE_EVALUACION primary key (ID_FE)
);

/*==============================================================*/
/* Index: FACTORES_DE_EVALUACION_PK                             */
/*==============================================================*/
create unique index FACTORES_DE_EVALUACION_PK on FACTORES_DE_EVALUACION (
ID_FE
);

/*==============================================================*/
/* Index: TIENE_FK                                              */
/*==============================================================*/
create  index TIENE_FK on FACTORES_DE_EVALUACION (
ID_USUARIO,
ID_PLANILLA_OBRERO
);

/*==============================================================*/
/* Table: FORMULAS                                              */
/*==============================================================*/
create table FORMULAS (
   ID_FORMULA           NUMERIC              not null,
   ID_USUARIO           NUMERIC              not null,
   FECHA_CREACION       DATE                 null,
   TIPO_OPERACION       VARCHAR(1024)        null,
   VALOR_PESO           NUMERIC              null,
   constraint PK_FORMULAS primary key (ID_FORMULA)
);

/*==============================================================*/
/* Index: FORMULAS_PK                                           */
/*==============================================================*/
create unique index FORMULAS_PK on FORMULAS (
ID_FORMULA
);

/*==============================================================*/
/* Index: EMPLEA_FK                                             */
/*==============================================================*/
create  index EMPLEA_FK on FORMULAS (
ID_USUARIO
);

/*==============================================================*/
/* Table: OBJETIVOS                                             */
/*==============================================================*/
create table OBJETIVOS (
   CD_OBJ               NUMERIC              not null,
   NOMBRE_OBJETIVO      VARCHAR(255)         null,
   AREA_OBJETIVOS       CHAR(256)            null,
   OBJ_PESO             NUMERIC              null,
   OBJ_RANGO            NUMERIC              null,
   OBJ_PESO_X_RANGO     NUMERIC              null,
   CALIF_TOTAL_B        NUMERIC              null,
   constraint PK_OBJETIVOS primary key (CD_OBJ)
);

/*==============================================================*/
/* Index: OBJETIVOS_PK                                          */
/*==============================================================*/
create unique index OBJETIVOS_PK on OBJETIVOS (
CD_OBJ
);

/*==============================================================*/
/* Table: PERMISOS                                              */
/*==============================================================*/
create table PERMISOS (
   ID_PERMISOS          NUMERIC              not null,
   TIPOS_PERMISOS       TEXT                 null,
   DESCRIPCION_AUDITORIAS TEXT                 null,
   ACCION_PERMITIDA     TEXT                 null,
   constraint PK_PERMISOS primary key (ID_PERMISOS)
);

/*==============================================================*/
/* Index: PERMISOS_PK                                           */
/*==============================================================*/
create unique index PERMISOS_PK on PERMISOS (
ID_PERMISOS
);

/*==============================================================*/
/* Table: PLANILLA_ADMINISTRATIVO                               */
/*==============================================================*/
create table PLANILLA_ADMINISTRATIVO (
   ID_USUARIO           NUMERIC              not null,
   ID_PLANILLA_ADMINISTRATIVO NUMERIC              not null,
   PERIODO_DE_EVALUADO  DATE                 null,
   A_CEDULA             NUMERIC              null,
   FECHA_FIRMA          DATE                 null,
   COMENTARIO_SPV       TEXT                 null,
   constraint PK_PLANILLA_ADMINISTRATIVO primary key (ID_USUARIO, ID_PLANILLA_ADMINISTRATIVO)
);

/*==============================================================*/
/* Index: PLANILLA_ADMINISTRATIVO_PK                            */
/*==============================================================*/
create unique index PLANILLA_ADMINISTRATIVO_PK on PLANILLA_ADMINISTRATIVO (
ID_USUARIO,
ID_PLANILLA_ADMINISTRATIVO
);

/*==============================================================*/
/* Index: ACCEDE_FK                                             */
/*==============================================================*/
create  index ACCEDE_FK on PLANILLA_ADMINISTRATIVO (
ID_USUARIO
);

/*==============================================================*/
/* Table: PLANILLA_DESEMP_EXEP                                  */
/*==============================================================*/
create table PLANILLA_DESEMP_EXEP (
   CODIGO_NOMINA        NUMERIC              not null,
   ID_USUARIO           NUMERIC              not null,
   ID_PLANILLA_ADMINISTRATIVO NUMERIC              not null,
   PUNTAJE_TOTAL_OBTENIDO NUMERIC              null,
   EXPOSICION_DE_MOTIVOS TEXT                 null,
   constraint PK_PLANILLA_DESEMP_EXEP primary key (CODIGO_NOMINA)
);

/*==============================================================*/
/* Index: PLANILLA_DESEMP_EXEP_PK                               */
/*==============================================================*/
create unique index PLANILLA_DESEMP_EXEP_PK on PLANILLA_DESEMP_EXEP (
CODIGO_NOMINA
);

/*==============================================================*/
/* Index: GENERA_FK                                             */
/*==============================================================*/
create  index GENERA_FK on PLANILLA_DESEMP_EXEP (
ID_USUARIO,
ID_PLANILLA_ADMINISTRATIVO
);

/*==============================================================*/
/* Table: PLANILLA_OBRERO                                       */
/*==============================================================*/
create table PLANILLA_OBRERO (
   ID_USUARIO           NUMERIC              not null,
   ID_PLANILLA_OBRERO   NUMERIC              not null,
   FECHA_FIRMA_PA       DATE                 null,
   COMENTARIO_SUP       TEXT                 null,
   COMENTARIO_EVALUADO  TEXT                 null,
   O_CEDULA             NUMERIC              null,
   constraint PK_PLANILLA_OBRERO primary key (ID_USUARIO, ID_PLANILLA_OBRERO)
);

/*==============================================================*/
/* Index: PLANILLA_OBRERO_PK                                    */
/*==============================================================*/
create unique index PLANILLA_OBRERO_PK on PLANILLA_OBRERO (
ID_USUARIO,
ID_PLANILLA_OBRERO
);

/*==============================================================*/
/* Index: MANEJA_FK                                             */
/*==============================================================*/
create  index MANEJA_FK on PLANILLA_OBRERO (
ID_USUARIO
);

/*==============================================================*/
/* Table: RANGO_DE_EVALUACION                                   */
/*==============================================================*/
create table RANGO_DE_EVALUACION (
   ID_RANGO_EVALUACION  NUMERIC              not null,
   ID_USUARIO           NUMERIC              not null,
   ID_PLANILLA_ADMINISTRATIVO NUMERIC              not null,
   CALIF_TOTAL_A        NUMERIC              null,
   CALIF_TOTAL_B        NUMERIC              null,
   CALIF_CALIFICACION_FINAL NUMERIC              null,
   RANGO_ACTUACION      CHAR(256)            null,
   constraint PK_RANGO_DE_EVALUACION primary key (ID_RANGO_EVALUACION)
);

/*==============================================================*/
/* Index: RANGO_DE_EVALUACION_PK                                */
/*==============================================================*/
create unique index RANGO_DE_EVALUACION_PK on RANGO_DE_EVALUACION (
ID_RANGO_EVALUACION
);

/*==============================================================*/
/* Index: CALIFICA_FK                                           */
/*==============================================================*/
create  index CALIFICA_FK on RANGO_DE_EVALUACION (
ID_USUARIO,
ID_PLANILLA_ADMINISTRATIVO
);

/*==============================================================*/
/* Table: RECIBE                                                */
/*==============================================================*/
create table RECIBE (
   ID_PERMISOS          NUMERIC              not null,
   ID_USUARIO           NUMERIC              not null,
   constraint PK_RECIBE primary key (ID_PERMISOS, ID_USUARIO)
);

/*==============================================================*/
/* Index: RECIBE_PK                                             */
/*==============================================================*/
create unique index RECIBE_PK on RECIBE (
ID_PERMISOS,
ID_USUARIO
);

/*==============================================================*/
/* Index: RECIBE_FK                                             */
/*==============================================================*/
create  index RECIBE_FK on RECIBE (
ID_PERMISOS
);

/*==============================================================*/
/* Index: RECIBE2_FK                                            */
/*==============================================================*/
create  index RECIBE2_FK on RECIBE (
ID_USUARIO
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO (
   ID_USUARIO           NUMERIC              not null,
   NOMBRE_USUARIO       TEXT                 null,
   CATEGORIA_USUARIO    TEXT                 null,
   CONTRASENA           VARCHAR(254)         null,
   TIPOS_PERMISOS_      TEXT                 null,
   constraint PK_USUARIO primary key (ID_USUARIO)
);

/*==============================================================*/
/* Index: USUARIO_PK                                            */
/*==============================================================*/
create unique index USUARIO_PK on USUARIO (
ID_USUARIO
);

alter table AUDITORIA
   add constraint FK_AUDITORI_REQUIERE_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;

alter table CONTIENE
   add constraint FK_CONTIENE_CONTIENE_OBJETIVO foreign key (CD_OBJ)
      references OBJETIVOS (CD_OBJ)
      on delete restrict on update restrict;

alter table CONTIENE
   add constraint FK_CONTIENE_CONTIENE2_COMPETEN foreign key (CD_COMP)
      references COMPETENCIAS (CD_COMP)
      on delete restrict on update restrict;

alter table CONTIENE
   add constraint FK_CONTIENE_CONTIENE3_PLANILLA foreign key (ID_USUARIO, ID_PLANILLA_ADMINISTRATIVO)
      references PLANILLA_ADMINISTRATIVO (ID_USUARIO, ID_PLANILLA_ADMINISTRATIVO)
      on delete restrict on update restrict;

alter table FACTORES_DE_EVALUACION
   add constraint FK_FACTORES_TIENE_PLANILLA foreign key (ID_USUARIO, ID_PLANILLA_OBRERO)
      references PLANILLA_OBRERO (ID_USUARIO, ID_PLANILLA_OBRERO)
      on delete restrict on update restrict;

alter table FORMULAS
   add constraint FK_FORMULAS_EMPLEA_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;

alter table PLANILLA_ADMINISTRATIVO
   add constraint FK_PLANILLA_ACCEDE_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;

alter table PLANILLA_DESEMP_EXEP
   add constraint FK_PLANILLA_GENERA_PLANILLA foreign key (ID_USUARIO, ID_PLANILLA_ADMINISTRATIVO)
      references PLANILLA_ADMINISTRATIVO (ID_USUARIO, ID_PLANILLA_ADMINISTRATIVO)
      on delete restrict on update restrict;

alter table PLANILLA_OBRERO
   add constraint FK_PLANILLA_MANEJA_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;

alter table RANGO_DE_EVALUACION
   add constraint FK_RANGO_DE_CALIFICA_PLANILLA foreign key (ID_USUARIO, ID_PLANILLA_ADMINISTRATIVO)
      references PLANILLA_ADMINISTRATIVO (ID_USUARIO, ID_PLANILLA_ADMINISTRATIVO)
      on delete restrict on update restrict;

alter table RECIBE
   add constraint FK_RECIBE_RECIBE_PERMISOS foreign key (ID_PERMISOS)
      references PERMISOS (ID_PERMISOS)
      on delete restrict on update restrict;

alter table RECIBE
   add constraint FK_RECIBE_RECIBE2_USUARIO foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO)
      on delete restrict on update restrict;

