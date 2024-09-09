/*==============================================================*/
/* DBMS name:      PostgreSQL 9.x                               */
/* Created on:     6/9/2024 5:03:24 p. m.                       */
/*==============================================================*/


drop index ASIGNAN_C_FK;

drop index TIENEN_UA_FK;

drop index INCLUYE_ADMITV_FK;

drop index ADMINISTRATIVOS_PK;

drop table ADMINISTRATIVOS;

drop index AREAS_PK;

drop table AREAS;

drop index COMPUESTOS_FK;

drop index ASPECTOS_PK;

drop table ASPECTOS;

drop index CARGOS_EVALUADOS_PK;

drop table CARGOS_EVALUADOS;

drop index DESIGNA_FK;

drop index MANEJAN_COMP_FK;

drop index COMPETENCIAS_PK;

drop table COMPETENCIAS;

drop index PERTENECER_FK;

drop index INTEGRA_FK;

drop index DOCENTES_PK;

drop table DOCENTES;

drop index APLICA_2_FK;

drop index RECIBE_ODI_DET_FK;

drop index REGISTRA_FK;

drop index EVALUACION_ADMINISTRATIVO_PK;

drop table EVALUACION_ADMINISTRATIVO;

drop index MANEJA_EVAL_OBRERO_FK;

drop index COMPONEN_FK;

drop index EVALUACION_OBREROS_PK;

drop table EVALUACION_OBREROS;

drop index CONTROLA_EVALCOMP_DET_FK;

drop index RECIBE_COMP_FK;

drop index EVAL_ADMIN_COMP_DET_PK;

drop table EVAL_ADMIN_COMP_DET;

drop index GUARDA_TCOMP_FK;

drop index EVAL_ADMIN_COMP_TOTAL_PK;

drop table EVAL_ADMIN_COMP_TOTAL;

drop index EVAL_ADMIN_ODI_FK;

drop index RECIBE_ODI_FK;

drop index EVAL_ADMIN_ODI_DET_PK;

drop table EVAL_ADMIN_ODI_DET;

drop index GUARDA_EVALODI_DET_FK;

drop index EVAL_ADMIN_ODI_TOTAL_PK;

drop table EVAL_ADMIN_ODI_TOTAL;

drop index FACTORES_PK;

drop table FACTORES;

drop index REVISA_JA_FK;

drop index ASIGNAN_UA_FK;

drop index INTEGRAN_JA_FK;

drop index JEFES_ADMINISTRATIVOS_PK;

drop table JEFES_ADMINISTRATIVOS;

drop index REVISA_JO_FK;

drop index MANEJA_FK;

drop index INTEGRAN_JO_FK;

drop index TIENE_FK;

drop index JEFES_OBREROS_PK;

drop table JEFES_OBREROS;

drop index ASIGNAN_CARGO_FK;

drop index PERTENECE_FK;

drop index OBREROS_PK;

drop table OBREROS;

drop index TENER_FK;

drop index ACCEDER_FK;

drop index ODI_PK;

drop table ODI;

drop index PERSONAS_PK;

drop table PERSONAS;

drop index INCLUYE_SUPRV_FK;

drop index SUPERVISOR_PK;

drop table SUPERVISOR;

drop index UBICACION_ADMINISTRATIVA_PK;

drop table UBICACION_ADMINISTRATIVA;

drop index ASIGNA_FK;

drop index USUARIOS_PK;

drop table USUARIOS;

/*==============================================================*/
/* Table: ADMINISTRATIVOS                                       */
/*==============================================================*/
create table ADMINISTRATIVOS (
   ADMIN_ID             SERIAL               not null,
   ID_CARGO_EV          INT4                 not null,
   UA_ID                INT4                 not null,
   PERSONA_ID           INT4                 not null,
   constraint PK_ADMINISTRATIVOS primary key (ADMIN_ID)
);

/*==============================================================*/
/* Index: ADMINISTRATIVOS_PK                                    */
/*==============================================================*/
create unique index ADMINISTRATIVOS_PK on ADMINISTRATIVOS (
ADMIN_ID
);

/*==============================================================*/
/* Index: INCLUYE_ADMITV_FK                                     */
/*==============================================================*/
create  index INCLUYE_ADMITV_FK on ADMINISTRATIVOS (
PERSONA_ID
);

/*==============================================================*/
/* Index: TIENEN_UA_FK                                          */
/*==============================================================*/
create  index TIENEN_UA_FK on ADMINISTRATIVOS (
UA_ID
);

/*==============================================================*/
/* Index: ASIGNAN_C_FK                                          */
/*==============================================================*/
create  index ASIGNAN_C_FK on ADMINISTRATIVOS (
ID_CARGO_EV
);

/*==============================================================*/
/* Table: AREAS                                                 */
/*==============================================================*/
create table AREAS (
   AREA_IDP             SERIAL               not null,
   NOMBRE_AREA          TEXT                 null,
   constraint PK_AREAS primary key (AREA_IDP)
);

/*==============================================================*/
/* Index: AREAS_PK                                              */
/*==============================================================*/
create unique index AREAS_PK on AREAS (
AREA_IDP
);

/*==============================================================*/
/* Table: ASPECTOS                                              */
/*==============================================================*/
create table ASPECTOS (
   ASPECTO_ID           SERIAL               not null,
   FAC_ID               INT4                 null,
   CODIGO               CHAR(256)            null,
   NOMBRE_ASPECTO       TEXT                 null,
   STATUS               TEXT                 null,
   PUNTAJE              NUMERIC              null,
   constraint PK_ASPECTOS primary key (ASPECTO_ID)
);

/*==============================================================*/
/* Index: ASPECTOS_PK                                           */
/*==============================================================*/
create unique index ASPECTOS_PK on ASPECTOS (
ASPECTO_ID
);

/*==============================================================*/
/* Index: COMPUESTOS_FK                                         */
/*==============================================================*/
create  index COMPUESTOS_FK on ASPECTOS (
FAC_ID
);

/*==============================================================*/
/* Table: CARGOS_EVALUADOS                                      */
/*==============================================================*/
create table CARGOS_EVALUADOS (
   ID_CARGO_EV          SERIAL               not null,
   NOMBRE_CARGO_JEFES   TEXT                 null,
   constraint PK_CARGOS_EVALUADOS primary key (ID_CARGO_EV)
);

/*==============================================================*/
/* Index: CARGOS_EVALUADOS_PK                                   */
/*==============================================================*/
create unique index CARGOS_EVALUADOS_PK on CARGOS_EVALUADOS (
ID_CARGO_EV
);

/*==============================================================*/
/* Table: COMPETENCIAS                                          */
/*==============================================================*/
create table COMPETENCIAS (
   COMP_ID              SERIAL               not null,
   AREA_IDP             INT4                 not null,
   JA_ID                INT4                 null,
   NOMBRE_COMP          TEXT                 null,
   STATUS               TEXT                 null,
   PESO_COMP            NUMERIC              null,
   RANGO_COMP           NUMERIC              null,
   PESOXRANGO_COMP      NUMERIC              null,
   constraint PK_COMPETENCIAS primary key (COMP_ID)
);

/*==============================================================*/
/* Index: COMPETENCIAS_PK                                       */
/*==============================================================*/
create unique index COMPETENCIAS_PK on COMPETENCIAS (
COMP_ID
);

/*==============================================================*/
/* Index: MANEJAN_COMP_FK                                       */
/*==============================================================*/
create  index MANEJAN_COMP_FK on COMPETENCIAS (
JA_ID
);

/*==============================================================*/
/* Index: DESIGNA_FK                                            */
/*==============================================================*/
create  index DESIGNA_FK on COMPETENCIAS (
AREA_IDP
);

/*==============================================================*/
/* Table: DOCENTES                                              */
/*==============================================================*/
create table DOCENTES (
   DOCENTE_ID           SERIAL               not null,
   PERSONA_ID           INT4                 not null,
   UA_ID                INT4                 not null,
   constraint PK_DOCENTES primary key (DOCENTE_ID)
);

/*==============================================================*/
/* Index: DOCENTES_PK                                           */
/*==============================================================*/
create unique index DOCENTES_PK on DOCENTES (
DOCENTE_ID
);

/*==============================================================*/
/* Index: INTEGRA_FK                                            */
/*==============================================================*/
create  index INTEGRA_FK on DOCENTES (
PERSONA_ID
);

/*==============================================================*/
/* Index: PERTENECER_FK                                         */
/*==============================================================*/
create  index PERTENECER_FK on DOCENTES (
UA_ID
);

/*==============================================================*/
/* Table: EVALUACION_ADMINISTRATIVO                             */
/*==============================================================*/
create table EVALUACION_ADMINISTRATIVO (
   EVALADMIN_ID         SERIAL               not null,
   EVALADMINODIDET_IDP  INT4                 null,
   EVALCOMPDET_ID       INT4                 null,
   JA_ID                INT4                 not null,
   CEDULA               NUMERIC              null,
   RANDO_DE_ACTUACION   TEXT                 null,
   constraint PK_EVALUACION_ADMINISTRATIVO primary key (EVALADMIN_ID)
);

/*==============================================================*/
/* Index: EVALUACION_ADMINISTRATIVO_PK                          */
/*==============================================================*/
create unique index EVALUACION_ADMINISTRATIVO_PK on EVALUACION_ADMINISTRATIVO (
EVALADMIN_ID
);

/*==============================================================*/
/* Index: REGISTRA_FK                                           */
/*==============================================================*/
create  index REGISTRA_FK on EVALUACION_ADMINISTRATIVO (
EVALCOMPDET_ID
);

/*==============================================================*/
/* Index: RECIBE_ODI_DET_FK                                     */
/*==============================================================*/
create  index RECIBE_ODI_DET_FK on EVALUACION_ADMINISTRATIVO (
EVALADMINODIDET_IDP
);

/*==============================================================*/
/* Index: APLICA_2_FK                                           */
/*==============================================================*/
create  index APLICA_2_FK on EVALUACION_ADMINISTRATIVO (
JA_ID
);

/*==============================================================*/
/* Table: EVALUACION_OBREROS                                    */
/*==============================================================*/
create table EVALUACION_OBREROS (
   EVALOB_ID            SERIAL               not null,
   ASPECTO_ID           INT4                 null,
   JO_IDP               INT4                 not null,
   CEDULA               NUMERIC              null,
   FACTOR_EVAL          TEXT                 null,
   PUNTAJE_FINAL        NUMERIC              null,
   constraint PK_EVALUACION_OBREROS primary key (EVALOB_ID)
);

/*==============================================================*/
/* Index: EVALUACION_OBREROS_PK                                 */
/*==============================================================*/
create unique index EVALUACION_OBREROS_PK on EVALUACION_OBREROS (
EVALOB_ID
);

/*==============================================================*/
/* Index: COMPONEN_FK                                           */
/*==============================================================*/
create  index COMPONEN_FK on EVALUACION_OBREROS (
ASPECTO_ID
);

/*==============================================================*/
/* Index: MANEJA_EVAL_OBRERO_FK                                 */
/*==============================================================*/
create  index MANEJA_EVAL_OBRERO_FK on EVALUACION_OBREROS (
JO_IDP
);

/*==============================================================*/
/* Table: EVAL_ADMIN_COMP_DET                                   */
/*==============================================================*/
create table EVAL_ADMIN_COMP_DET (
   EVALCOMPDET_ID       SERIAL               not null,
   JA_ID                INT4                 not null,
   COMP_ID              INT4                 not null,
   PESO_CMP             CHAR(10)             null,
   RANGO_CMP            CHAR(10)             null,
   PERIODO              DATE                 null,
   TOTAL                NUMERIC              null,
   constraint PK_EVAL_ADMIN_COMP_DET primary key (EVALCOMPDET_ID)
);

/*==============================================================*/
/* Index: EVAL_ADMIN_COMP_DET_PK                                */
/*==============================================================*/
create unique index EVAL_ADMIN_COMP_DET_PK on EVAL_ADMIN_COMP_DET (
EVALCOMPDET_ID
);

/*==============================================================*/
/* Index: RECIBE_COMP_FK                                        */
/*==============================================================*/
create  index RECIBE_COMP_FK on EVAL_ADMIN_COMP_DET (
COMP_ID
);

/*==============================================================*/
/* Index: CONTROLA_EVALCOMP_DET_FK                              */
/*==============================================================*/
create  index CONTROLA_EVALCOMP_DET_FK on EVAL_ADMIN_COMP_DET (
JA_ID
);

/*==============================================================*/
/* Table: EVAL_ADMIN_COMP_TOTAL                                 */
/*==============================================================*/
create table EVAL_ADMIN_COMP_TOTAL (
   ATTRIBUTE_80         SERIAL               not null,
   EVALCOMPDET_ID       INT4                 null,
   ATTRIBUTE_83         DATE                 null,
   ATTRIBUTE_84         NUMERIC              null,
   constraint PK_EVAL_ADMIN_COMP_TOTAL primary key (ATTRIBUTE_80)
);

/*==============================================================*/
/* Index: EVAL_ADMIN_COMP_TOTAL_PK                              */
/*==============================================================*/
create unique index EVAL_ADMIN_COMP_TOTAL_PK on EVAL_ADMIN_COMP_TOTAL (
ATTRIBUTE_80
);

/*==============================================================*/
/* Index: GUARDA_TCOMP_FK                                       */
/*==============================================================*/
create  index GUARDA_TCOMP_FK on EVAL_ADMIN_COMP_TOTAL (
EVALCOMPDET_ID
);

/*==============================================================*/
/* Table: EVAL_ADMIN_ODI_DET                                    */
/*==============================================================*/
create table EVAL_ADMIN_ODI_DET (
   EVALADMINODIDET_IDP  SERIAL               not null,
   ODI_ID               INT4                 not null,
   JA_ID                INT4                 not null,
   TOTAL                NUMERIC              null,
   PERIODO              DATE                 null,
   PESO                 CHAR(10)             null,
   RANGO                CHAR(10)             null,
   constraint PK_EVAL_ADMIN_ODI_DET primary key (EVALADMINODIDET_IDP)
);

/*==============================================================*/
/* Index: EVAL_ADMIN_ODI_DET_PK                                 */
/*==============================================================*/
create unique index EVAL_ADMIN_ODI_DET_PK on EVAL_ADMIN_ODI_DET (
EVALADMINODIDET_IDP
);

/*==============================================================*/
/* Index: RECIBE_ODI_FK                                         */
/*==============================================================*/
create  index RECIBE_ODI_FK on EVAL_ADMIN_ODI_DET (
ODI_ID
);

/*==============================================================*/
/* Index: EVAL_ADMIN_ODI_FK                                     */
/*==============================================================*/
create  index EVAL_ADMIN_ODI_FK on EVAL_ADMIN_ODI_DET (
JA_ID
);

/*==============================================================*/
/* Table: EVAL_ADMIN_ODI_TOTAL                                  */
/*==============================================================*/
create table EVAL_ADMIN_ODI_TOTAL (
   EVALADMINODI_TOTAL_IDP SERIAL               not null,
   EVALADMINODIDET_IDP  INT4                 null,
   PERIODO              DATE                 null,
   PUNTAJE_TOTAL        NUMERIC              null,
   constraint PK_EVAL_ADMIN_ODI_TOTAL primary key (EVALADMINODI_TOTAL_IDP)
);

/*==============================================================*/
/* Index: EVAL_ADMIN_ODI_TOTAL_PK                               */
/*==============================================================*/
create unique index EVAL_ADMIN_ODI_TOTAL_PK on EVAL_ADMIN_ODI_TOTAL (
EVALADMINODI_TOTAL_IDP
);

/*==============================================================*/
/* Index: GUARDA_EVALODI_DET_FK                                 */
/*==============================================================*/
create  index GUARDA_EVALODI_DET_FK on EVAL_ADMIN_ODI_TOTAL (
EVALADMINODIDET_IDP
);

/*==============================================================*/
/* Table: FACTORES                                              */
/*==============================================================*/
create table FACTORES (
   FAC_ID               SERIAL               not null,
   CODIGO               CHAR(256)            null,
   NOMBRE_FACTOR        TEXT                 null,
   STATUS               TEXT                 null,
   PORCENTAJE           NUMERIC              null,
   CARGO_ASIG           TEXT                 null,
   constraint PK_FACTORES primary key (FAC_ID)
);

/*==============================================================*/
/* Index: FACTORES_PK                                           */
/*==============================================================*/
create unique index FACTORES_PK on FACTORES (
FAC_ID
);

/*==============================================================*/
/* Table: JEFES_ADMINISTRATIVOS                                 */
/*==============================================================*/
create table JEFES_ADMINISTRATIVOS (
   JA_ID                SERIAL               not null,
   ID_SUPERVISOR        INT4                 null,
   UA_ID                INT4                 null,
   PERSONA_ID           INT4                 not null,
   STATUS               TEXT                 null,
   CARGO_JA             TEXT                 null,
   constraint PK_JEFES_ADMINISTRATIVOS primary key (JA_ID)
);

/*==============================================================*/
/* Index: JEFES_ADMINISTRATIVOS_PK                              */
/*==============================================================*/
create unique index JEFES_ADMINISTRATIVOS_PK on JEFES_ADMINISTRATIVOS (
JA_ID
);

/*==============================================================*/
/* Index: INTEGRAN_JA_FK                                        */
/*==============================================================*/
create  index INTEGRAN_JA_FK on JEFES_ADMINISTRATIVOS (
PERSONA_ID
);

/*==============================================================*/
/* Index: ASIGNAN_UA_FK                                         */
/*==============================================================*/
create  index ASIGNAN_UA_FK on JEFES_ADMINISTRATIVOS (
UA_ID
);

/*==============================================================*/
/* Index: REVISA_JA_FK                                          */
/*==============================================================*/
create  index REVISA_JA_FK on JEFES_ADMINISTRATIVOS (
ID_SUPERVISOR
);

/*==============================================================*/
/* Table: JEFES_OBREROS                                         */
/*==============================================================*/
create table JEFES_OBREROS (
   JO_IDP               SERIAL               not null,
   PERSONA_ID           INT4                 not null,
   ID_SUPERVISOR        INT4                 null,
   FAC_ID               INT4                 null,
   AREA_IDP             INT4                 null,
   STATUS               TEXT                 null,
   CARGO_JO             TEXT                 null,
   constraint PK_JEFES_OBREROS primary key (JO_IDP)
);

/*==============================================================*/
/* Index: JEFES_OBREROS_PK                                      */
/*==============================================================*/
create unique index JEFES_OBREROS_PK on JEFES_OBREROS (
JO_IDP
);

/*==============================================================*/
/* Index: TIENE_FK                                              */
/*==============================================================*/
create  index TIENE_FK on JEFES_OBREROS (
AREA_IDP
);

/*==============================================================*/
/* Index: INTEGRAN_JO_FK                                        */
/*==============================================================*/
create  index INTEGRAN_JO_FK on JEFES_OBREROS (
PERSONA_ID
);

/*==============================================================*/
/* Index: MANEJA_FK                                             */
/*==============================================================*/
create  index MANEJA_FK on JEFES_OBREROS (
FAC_ID
);

/*==============================================================*/
/* Index: REVISA_JO_FK                                          */
/*==============================================================*/
create  index REVISA_JO_FK on JEFES_OBREROS (
ID_SUPERVISOR
);

/*==============================================================*/
/* Table: OBREROS                                               */
/*==============================================================*/
create table OBREROS (
   ID_CARGO_EV          INT4                 not null,
   OBRERO_ID            SERIAL               not null,
   PERSONA_ID           INT4                 not null,
   constraint PK_OBREROS primary key (ID_CARGO_EV, OBRERO_ID)
);

/*==============================================================*/
/* Index: OBREROS_PK                                            */
/*==============================================================*/
create unique index OBREROS_PK on OBREROS (
ID_CARGO_EV,
OBRERO_ID
);

/*==============================================================*/
/* Index: PERTENECE_FK                                          */
/*==============================================================*/
create  index PERTENECE_FK on OBREROS (
PERSONA_ID
);

/*==============================================================*/
/* Index: ASIGNAN_CARGO_FK                                      */
/*==============================================================*/
create  index ASIGNAN_CARGO_FK on OBREROS (
ID_CARGO_EV
);

/*==============================================================*/
/* Table: ODI                                                   */
/*==============================================================*/
create table ODI (
   ODI_ID               SERIAL               not null,
   UA_ID                INT4                 not null,
   JA_ID                INT4                 null,
   NOMBRE_ODI           TEXT                 null,
   STATUS               TEXT                 null,
   PESO_ODI             NUMERIC              null,
   RANGO_ODI            NUMERIC              null,
   PESOXRANGO_ODI       NUMERIC              null,
   constraint PK_ODI primary key (ODI_ID)
);

/*==============================================================*/
/* Index: ODI_PK                                                */
/*==============================================================*/
create unique index ODI_PK on ODI (
ODI_ID
);

/*==============================================================*/
/* Index: ACCEDER_FK                                            */
/*==============================================================*/
create  index ACCEDER_FK on ODI (
JA_ID
);

/*==============================================================*/
/* Index: TENER_FK                                              */
/*==============================================================*/
create  index TENER_FK on ODI (
UA_ID
);

/*==============================================================*/
/* Table: PERSONAS                                              */
/*==============================================================*/
create table PERSONAS (
   PERSONA_ID           SERIAL               not null,
   CEDULA               NUMERIC              null,
   NOMBRE               TEXT                 null,
   APELLIDO             TEXT                 null,
   GENERO               CHAR(256)            null,
   FECHA_NAC            DATE                 null,
   DIRECCION            TEXT                 null,
   DEP                  NUMERIC              null,
   constraint PK_PERSONAS primary key (PERSONA_ID)
);

/*==============================================================*/
/* Index: PERSONAS_PK                                           */
/*==============================================================*/
create unique index PERSONAS_PK on PERSONAS (
PERSONA_ID
);

/*==============================================================*/
/* Table: SUPERVISOR                                            */
/*==============================================================*/
create table SUPERVISOR (
   ID_SUPERVISOR        SERIAL               not null,
   PERSONA_ID           INT4                 not null,
   DEP                  NUMERIC              null,
   constraint PK_SUPERVISOR primary key (ID_SUPERVISOR)
);

/*==============================================================*/
/* Index: SUPERVISOR_PK                                         */
/*==============================================================*/
create unique index SUPERVISOR_PK on SUPERVISOR (
ID_SUPERVISOR
);

/*==============================================================*/
/* Index: INCLUYE_SUPRV_FK                                      */
/*==============================================================*/
create  index INCLUYE_SUPRV_FK on SUPERVISOR (
PERSONA_ID
);

/*==============================================================*/
/* Table: UBICACION_ADMINISTRATIVA                              */
/*==============================================================*/
create table UBICACION_ADMINISTRATIVA (
   UA_ID                SERIAL               not null,
   NOMBRE_UA            TEXT                 null,
   constraint PK_UBICACION_ADMINISTRATIVA primary key (UA_ID)
);

/*==============================================================*/
/* Index: UBICACION_ADMINISTRATIVA_PK                           */
/*==============================================================*/
create unique index UBICACION_ADMINISTRATIVA_PK on UBICACION_ADMINISTRATIVA (
UA_ID
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS (
   USUARIO_IDP          SERIAL               not null,
   PERSONA_ID           INT4                 not null,
   NOMBRE_USUARIO       TEXT                 null,
   CLAVE                NUMERIC              null,
   ROL                  TEXT                 null,
   constraint PK_USUARIOS primary key (USUARIO_IDP)
);

/*==============================================================*/
/* Index: USUARIOS_PK                                           */
/*==============================================================*/
create unique index USUARIOS_PK on USUARIOS (
USUARIO_IDP
);

/*==============================================================*/
/* Index: ASIGNA_FK                                             */
/*==============================================================*/
create  index ASIGNA_FK on USUARIOS (
PERSONA_ID
);

alter table ADMINISTRATIVOS
   add constraint FK_ADMINIST_ASIGNAN_C_CARGOS_E foreign key (ID_CARGO_EV)
      references CARGOS_EVALUADOS (ID_CARGO_EV)
      on delete restrict on update restrict;

alter table ADMINISTRATIVOS
   add constraint FK_ADMINIST_INCLUYE_A_PERSONAS foreign key (PERSONA_ID)
      references PERSONAS (PERSONA_ID)
      on delete restrict on update restrict;

alter table ADMINISTRATIVOS
   add constraint FK_ADMINIST_TIENEN_UA_UBICACIO foreign key (UA_ID)
      references UBICACION_ADMINISTRATIVA (UA_ID)
      on delete restrict on update restrict;

alter table ASPECTOS
   add constraint FK_ASPECTOS_COMPUESTO_FACTORES foreign key (FAC_ID)
      references FACTORES (FAC_ID)
      on delete restrict on update restrict;

alter table COMPETENCIAS
   add constraint FK_COMPETEN_DESIGNA_AREAS foreign key (AREA_IDP)
      references AREAS (AREA_IDP)
      on delete restrict on update restrict;

alter table COMPETENCIAS
   add constraint FK_COMPETEN_MANEJAN_C_JEFES_AD foreign key (JA_ID)
      references JEFES_ADMINISTRATIVOS (JA_ID)
      on delete restrict on update restrict;

alter table DOCENTES
   add constraint FK_DOCENTES_INTEGRA_PERSONAS foreign key (PERSONA_ID)
      references PERSONAS (PERSONA_ID)
      on delete restrict on update restrict;

alter table DOCENTES
   add constraint FK_DOCENTES_PERTENECE_UBICACIO foreign key (UA_ID)
      references UBICACION_ADMINISTRATIVA (UA_ID)
      on delete restrict on update restrict;

alter table EVALUACION_ADMINISTRATIVO
   add constraint FK_EVALUACI_APLICA_2_JEFES_AD foreign key (JA_ID)
      references JEFES_ADMINISTRATIVOS (JA_ID)
      on delete restrict on update restrict;

alter table EVALUACION_ADMINISTRATIVO
   add constraint FK_EVALUACI_RECIBE_OD_EVAL_ADM foreign key (EVALADMINODIDET_IDP)
      references EVAL_ADMIN_ODI_DET (EVALADMINODIDET_IDP)
      on delete restrict on update restrict;

alter table EVALUACION_ADMINISTRATIVO
   add constraint FK_EVALUACI_REGISTRA_EVAL_ADM foreign key (EVALCOMPDET_ID)
      references EVAL_ADMIN_COMP_DET (EVALCOMPDET_ID)
      on delete restrict on update restrict;

alter table EVALUACION_OBREROS
   add constraint FK_EVALUACI_COMPONEN_ASPECTOS foreign key (ASPECTO_ID)
      references ASPECTOS (ASPECTO_ID)
      on delete restrict on update restrict;

alter table EVALUACION_OBREROS
   add constraint FK_EVALUACI_MANEJA_EV_JEFES_OB foreign key (JO_IDP)
      references JEFES_OBREROS (JO_IDP)
      on delete restrict on update restrict;

alter table EVAL_ADMIN_COMP_DET
   add constraint FK_EVAL_ADM_CONTROLA__JEFES_AD foreign key (JA_ID)
      references JEFES_ADMINISTRATIVOS (JA_ID)
      on delete restrict on update restrict;

alter table EVAL_ADMIN_COMP_DET
   add constraint FK_EVAL_ADM_RECIBE_CO_COMPETEN foreign key (COMP_ID)
      references COMPETENCIAS (COMP_ID)
      on delete restrict on update restrict;

alter table EVAL_ADMIN_COMP_TOTAL
   add constraint FK_EVAL_ADM_GUARDA_TC_EVAL_ADM foreign key (EVALCOMPDET_ID)
      references EVAL_ADMIN_COMP_DET (EVALCOMPDET_ID)
      on delete restrict on update restrict;

alter table EVAL_ADMIN_ODI_DET
   add constraint FK_EVAL_ADM_EVAL_ADMI_JEFES_AD foreign key (JA_ID)
      references JEFES_ADMINISTRATIVOS (JA_ID)
      on delete restrict on update restrict;

alter table EVAL_ADMIN_ODI_DET
   add constraint FK_EVAL_ADM_RECIBE_OD_ODI foreign key (ODI_ID)
      references ODI (ODI_ID)
      on delete restrict on update restrict;

alter table EVAL_ADMIN_ODI_TOTAL
   add constraint FK_EVAL_ADM_GUARDA_EV_EVAL_ADM foreign key (EVALADMINODIDET_IDP)
      references EVAL_ADMIN_ODI_DET (EVALADMINODIDET_IDP)
      on delete restrict on update restrict;

alter table JEFES_ADMINISTRATIVOS
   add constraint FK_JEFES_AD_ASIGNAN_U_UBICACIO foreign key (UA_ID)
      references UBICACION_ADMINISTRATIVA (UA_ID)
      on delete restrict on update restrict;

alter table JEFES_ADMINISTRATIVOS
   add constraint FK_JEFES_AD_INTEGRAN__PERSONAS foreign key (PERSONA_ID)
      references PERSONAS (PERSONA_ID)
      on delete restrict on update restrict;

alter table JEFES_ADMINISTRATIVOS
   add constraint FK_JEFES_AD_REVISA_JA_SUPERVIS foreign key (ID_SUPERVISOR)
      references SUPERVISOR (ID_SUPERVISOR)
      on delete restrict on update restrict;

alter table JEFES_OBREROS
   add constraint FK_JEFES_OB_INTEGRAN__PERSONAS foreign key (PERSONA_ID)
      references PERSONAS (PERSONA_ID)
      on delete restrict on update restrict;

alter table JEFES_OBREROS
   add constraint FK_JEFES_OB_MANEJA_FACTORES foreign key (FAC_ID)
      references FACTORES (FAC_ID)
      on delete restrict on update restrict;

alter table JEFES_OBREROS
   add constraint FK_JEFES_OB_REVISA_JO_SUPERVIS foreign key (ID_SUPERVISOR)
      references SUPERVISOR (ID_SUPERVISOR)
      on delete restrict on update restrict;

alter table JEFES_OBREROS
   add constraint FK_JEFES_OB_TIENE_AREAS foreign key (AREA_IDP)
      references AREAS (AREA_IDP)
      on delete restrict on update restrict;

alter table OBREROS
   add constraint FK_OBREROS_ASIGNAN_C_CARGOS_E foreign key (ID_CARGO_EV)
      references CARGOS_EVALUADOS (ID_CARGO_EV)
      on delete restrict on update restrict;

alter table OBREROS
   add constraint FK_OBREROS_PERTENECE_PERSONAS foreign key (PERSONA_ID)
      references PERSONAS (PERSONA_ID)
      on delete restrict on update restrict;

alter table ODI
   add constraint FK_ODI_ACCEDER_JEFES_AD foreign key (JA_ID)
      references JEFES_ADMINISTRATIVOS (JA_ID)
      on delete restrict on update restrict;

alter table ODI
   add constraint FK_ODI_TENER_UBICACIO foreign key (UA_ID)
      references UBICACION_ADMINISTRATIVA (UA_ID)
      on delete restrict on update restrict;

alter table SUPERVISOR
   add constraint FK_SUPERVIS_INCLUYE_S_PERSONAS foreign key (PERSONA_ID)
      references PERSONAS (PERSONA_ID)
      on delete restrict on update restrict;

alter table USUARIOS
   add constraint FK_USUARIOS_ASIGNA_PERSONAS foreign key (PERSONA_ID)
      references PERSONAS (PERSONA_ID)
      on delete restrict on update restrict;

