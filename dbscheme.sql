CREATE DATABASE sgc;
USE sgc;

--SET NAMES 'utf8';

CREATE TABLE ProcesoMatriz (
	IDProcesoMatriz INTEGER NOT NULL,
	Nombre VARCHAR(50) NOT NULL,

	PRIMARY KEY (IDProcesoMAtriz)
		);


CREATE TABLE Subproceso (
	IDSubproceso INTEGER NOT NULL,
	IDProcesoMatriz INTEGER NOT NULL,
	Nombre VARCHAR(60) NOT NULL,

	PRIMARY KEY (IDSubproceso, IDProcesoMatriz),
	FOREIGN KEY (IDProcesoMatriz) 
		REFERENCES ProcesoMatriz(IDProcesoMatriz)

		);

CREATE TABLE TipoDeRecurso (
	IDTipoDeRecurso INTEGER NOT NULL,
	Nombre VARCHAR(20),

	PRIMARY KEY (IDTipoDeRecurso)

		);

CREATE TABLE Recurso (
	IDRecurso INTEGER NOT NULL,
	IDSubproceso INTEGER NOT NULL,
	IDProcesoMatriz INTEGER NOT NULL,
	IDTipoDeRecurso INTEGER NOT NULL,
	Nombre VARCHAR(80),
	Codigo VARCHAR(20) UNIQUE,

	PRIMARY KEY (IDRecurso, IDSubproceso, IDProcesoMatriz),
	FOREIGN KEY (IDSubproceso, IDProcesoMatriz) 
		REFERENCES Subproceso(IDSubproceso, IDProcesoMatriz)

		);

CREATE TABLE ArchivoMaestro (
	IDArchivoMaestro INTEGER NOT NULL,
	IDRecurso INTEGER NOT NULL,
	IDSubproceso INTEGER NOT NULL,
	IDProcesoMatriz INTEGER NOT NULL,

	PRIMARY KEY (IDArchivoMaestro, IDRecurso, IDSubproceso, IDProcesoMatriz),
	FOREIGN KEY (IDRecurso, IDSubproceso, IDProcesoMatriz) 
		REFERENCES Recurso(IDRecurso, IDSubproceso, IDProcesoMatriz)

		);

CREATE TABLE ArchivoVersion (
	IDArchivoVersion INTEGER NOT NULL,
	IDArchivoMaestro INTEGER NOT NULL,
	IDRecurso INTEGER NOT NULL,
	IDSubproceso INTEGER NOT NULL,
	IDProcesoMatriz INTEGER NOT NULL,
	Version VARCHAR(4), 
	Ruta VARCHAR(300) NOT NULL,
	FechaDeRevision DATE,
	FechaDeCargaDeArchivo DATE,


	PRIMARY KEY (IDArchivoVersion),
	FOREIGN KEY (IDArchivoMaestro, IDRecurso, IDSubproceso, IDProcesoMatriz) 
		REFERENCES ArchivoMaestro(IDArchivoMaestro, IDRecurso, IDSubproceso, IDProcesoMatriz)
		);
------------------------
CREATE USER 'webapp'@'localhost' IDENTIFIED BY '1234';
GRANT ALL ON sgc.* TO 'webapp'@'localhost';


------------------------


INSERT INTO TipoDeRecurso VALUES (1, "Documento");
INSERT INTO TipoDeRecurso VALUES (2, "Formato");
INSERT INTO TipoDeRecurso VALUES (3, "Guía");
INSERT INTO TipoDeRecurso VALUES (4, "Instructivo");
INSERT INTO TipoDeRecurso VALUES (5, "Mapeo");



INSERT INTO ProcesoMatriz VALUES (4, "Contexto de la organización");
INSERT INTO ProcesoMatriz VALUES (5, "Liderazgo");
INSERT INTO ProcesoMatriz VALUES (6, "Planificación");
INSERT INTO ProcesoMatriz VALUES (7, "Soporte");
INSERT INTO ProcesoMatriz VALUES (8, "Operaciones");
INSERT INTO ProcesoMatriz VALUES (9, "Actuación de la evaluación");
INSERT INTO ProcesoMatriz VALUES (10, "Mejora Continua");

------------------------

INSERT INTO Subproceso VALUES (1,4, "Contexto Organizacional");
INSERT INTO Subproceso VALUES (1,5, "Director del Plantel");
INSERT INTO Subproceso VALUES (1,6, "Planificación");

INSERT INTO Subproceso VALUES (1,7, "Compras");
INSERT INTO Subproceso VALUES (2,7, "Evaluación de proveedores");
INSERT INTO Subproceso VALUES (3,7, "Provisión de Recusos");
INSERT INTO Subproceso VALUES (4,7, "Apoyo Logístico");
INSERT INTO Subproceso VALUES (5,7, "Actos Académicos");
INSERT INTO Subproceso VALUES (6,7, "Competencias");
INSERT INTO Subproceso VALUES (7,7, "Medio Ambiente");
INSERT INTO Subproceso VALUES (8,7, "Control de la Información Documantada ");
INSERT INTO Subproceso VALUES (9,7, "Ingreso y permanencia en el aula");
INSERT INTO Subproceso VALUES (10,7, "Prefectura");
INSERT INTO Subproceso VALUES (11,7, "Credenciale para primer ingreso");
INSERT INTO Subproceso VALUES (12,7, "Credenciales SEMS");
INSERT INTO Subproceso VALUES (13,7, "Mantenimiento de equipo");
INSERT INTO Subproceso VALUES (14,7, "Infrestructura");



INSERT INTO Subproceso VALUES (1,8, "Primer ingreso");
INSERT INTO Subproceso VALUES (2,8, "Curso de inducción");
INSERT INTO Subproceso VALUES (3,8, "Servicios Escolares");
INSERT INTO Subproceso VALUES (4,8, "Orientación Educativa");
INSERT INTO Subproceso VALUES (5,8, "Tutorias");
INSERT INTO Subproceso VALUES (6,8, "Recurso de Revisión");
INSERT INTO Subproceso VALUES (7,8, "Egreso");


INSERT INTO Subproceso VALUES (1,9, "Auditoria Interna");
INSERT INTO Subproceso VALUES (1,10, "Mejora continua");
INSERT INTO Subproceso VALUES (2,10, "No conformidad");
INSERT INTO Subproceso VALUES (3,10, "Acciones correctivas");

----------------------

INSERT INTO Recurso VALUES (1,1,4,1, "Contexto de la Organización (FODA)", "4.1-DO-COO-CO-01");
INSERT INTO Recurso VALUES (2,1,4,1, "Partes Interesadas", "4.2-DO-COO-CO-01");
INSERT INTO Recurso VALUES (3,1,4,1, "Manual de Calidad", "4.3 DO-COO-CO-01");
INSERT INTO Recurso VALUES (1,1,5,5, "Comunicación Interna", "7.4-MP-LID-DIR-01");
INSERT INTO Recurso VALUES (2,1,5,1, "Matriz de Comunicación Interna", "7.4-DO- LID- DIR-02");
INSERT INTO Recurso VALUES (3,1,5,2, "Minuta", "7.4-RE-LID-DIR-01");
INSERT INTO Recurso VALUES (4,1,5,1, "Manual de Organización", "5.1-MO-LID-DIR-01");
INSERT INTO Recurso VALUES (5,1,5,1, "Política de Calidad", "5.1-DO-LID-DIR-01");
INSERT INTO Recurso VALUES (6,1,5,1, "Misión", "5.1-DO-LID-DIR-02");
INSERT INTO Recurso VALUES (7,1,5,1, "Visión", "5.1-DO-LID-DIR-03");
INSERT INTO Recurso VALUES (8,1,5,2, "Organigrama", "5.3-DO-LID-DIR-04");
INSERT INTO Recurso VALUES (1,1,6,1, "Riesgos y oportunidades", "6.1-DO-PLA-PL-01");
INSERT INTO Recurso VALUES (2,1,6,1, "Objetivos de Calidad", "6.2-DO-PLA-PL-01");
INSERT INTO Recurso VALUES (3,1,6,0, "Matriz de Objetivos de Calidad", "6.2-DO-PLA-PL-02");
INSERT INTO Recurso VALUES (4,1,6,0, "Matriz de objetivos Gestión de Recursos", "6.2-DO-PLA-PL-03");
INSERT INTO Recurso VALUES (5,1,6,1, "Control de la información personal, propiedad del cliente (Matriz)", "6.2-DO-PLA-PL-04");


INSERT INTO Recurso VALUES (1,1,10,2, "Proyecto de mejora", "10.3-RE-MCO-MC-01");
INSERT INTO Recurso VALUES (2,1,10,2, "Control de estatus de proyectos de mejora", "10.3-RE-MCO-MC-02");
INSERT INTO Recurso VALUES (1,2,10,5, "Mapeo Producto No Conforme", "10.2-MP-MCO-NC-01");
INSERT INTO Recurso VALUES (2,2,10,2, "Control de estatus de PNC o Queja", "10.2-RE-MCO-NC-01");
INSERT INTO Recurso VALUES (3,2,10,2, "Queja, PNC, Sugerencia", "10.2-RE-MCO-NC-02");
INSERT INTO Recurso VALUES (4,2,10,2, "Respuesta al usuario de queja o sugerencia", "10.2-RE-MCO-NC-03");
INSERT INTO Recurso VALUES (5,2,10,1, "Matriz de criterio de producto no conforme", "10.2-RE-MCO-NC-04");
INSERT INTO Recurso VALUES (1,3,10,5, "Mapeo Accion correctiva", "10.2-MP-MCO-A-01");
INSERT INTO Recurso VALUES (2,3,10,3, "Guía para realización de 8 disciplinas e Ishikawa", "10.2-RE-MCO-AC-01");
INSERT INTO Recurso VALUES (3,3,10,2, "Acción correctiva", "10.2-RE-MCO-AC-02");
INSERT INTO Recurso VALUES (4,3,10,2, "Análisis de causa raíz", "10.2-RE-MCO-AC-03");
INSERT INTO Recurso VALUES (5,3,10,2, "Control de estatus de no conformidades", "10.2-RE-MCO-AC-04");




























