-- =====================================
-- BASE DE DATOS
-- =====================================

USE TechNova;


-- =====================================
-- TABLA CURSOS DESTACADOS
-- =====================================

CREATE TABLE IF NOT EXISTS cursos_destacados(

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100) NOT NULL,

    descripcion TEXT NOT NULL,

    imagen VARCHAR(255),

    categoria VARCHAR(50)

);


INSERT INTO cursos_destacados
(nombre, descripcion, imagen, categoria)
VALUES

(
'Desarrollo Web',
'Aprende HTML5, CSS3 y JavaScript para crear páginas web modernas.',
'img/curso/web.jpg',
'Frontend'
),

(
'PHP Profesional',
'Desarrollo backend con PHP orientado a objetos y MySQL.',
'img/curso/php.jpg',
'Backend'
),

(
'Bases de Datos',
'Diseño, creación y administración de bases de datos MySQL.',
'img/curso/mysql.jpg',
'Database'
),

(
'JavaScript Avanzado',
'Programación dinámica usando JavaScript y DOM.',
'img/curso/javascript.jpg',
'Frontend'
),

(
'Python Básico',
'Aprende fundamentos de programación con Python.',
'img/curso/python.jpg',
'Programación'
);



-- =====================================
-- TABLA CURSOS
-- =====================================

CREATE TABLE IF NOT EXISTS cursos(

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100) NOT NULL,

    descripcion TEXT NOT NULL,

    categoria VARCHAR(50),

    duracion VARCHAR(50),

    precio DECIMAL(10,2),

    imagen VARCHAR(255)

);


INSERT INTO cursos
(nombre, descripcion, categoria, duracion, precio, imagen)
VALUES

(
'HTML y CSS',
'Creación de interfaces web profesionales.',
'Frontend',
'40 horas',
150,
'img/curso/web.jpg'
),

(
'JavaScript',
'Programación web interactiva y manejo del DOM.',
'Frontend',
'60 horas',
200,
'img/curso/javascript.jpg'
),

(
'PHP desde cero',
'Aprende backend con PHP y conexión a MySQL.',
'Backend',
'50 horas',
250,
'img/curso/php.jpg'
),

(
'MySQL Profesional',
'Modelado y administración de bases de datos.',
'Database',
'35 horas',
180,
'img/curso/mysql.jpg'
),

(
'Python',
'Programación desde cero con Python.',
'Programación',
'45 horas',
220,
'img/curso/python.jpg'
);



-- =====================================
-- TABLA PROFESORES
-- =====================================

CREATE TABLE IF NOT EXISTS profesores(

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100) NOT NULL,

    especialidad VARCHAR(100),

    descripcion TEXT,

    imagen VARCHAR(255),

    correo VARCHAR(100)

);


INSERT INTO profesores
(nombre, especialidad, descripcion, imagen, correo)
VALUES

(
'Laura Méndez',
'Desarrollo Web',
'Especialista en frontend, HTML, CSS y diseño web.',
'img/profesores/laura.jpg',
'laura@technova.com'
),

(
'Carlos Rodríguez',
'PHP y Backend',
'Experto en aplicaciones web empresariales con PHP.',
'img/profesores/carlos.jpg',
'carlos@technova.com'
),

(
'Ana López',
'Bases de Datos',
'Especialista en diseño y administración de MySQL.',
'img/profesores/ana.jpg',
'ana@technova.com'
),

(
'José Vargas',
'Python',
'Programador especializado en Python y automatización.',
'img/profesores/jose.jpg',
'jose@technova.com'
),

(
'Marta Sánchez',
'JavaScript',
'Desarrolladora Full Stack especializada en JavaScript.',
'img/profesores/marta.jpg',
'marta@technova.com'
);



-- =====================================
-- TABLA CONTACTO
-- =====================================

CREATE TABLE IF NOT EXISTS contacto(

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100) NOT NULL,

    correo VARCHAR(100) NOT NULL,

    mensaje TEXT NOT NULL,

    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);


INSERT INTO contacto
(nombre, correo, mensaje)
VALUES

(
'Pedro Gómez',
'pedro@gmail.com',
'Quiero información del curso de PHP.'
),

(
'María López',
'maria@gmail.com',
'Me interesa el curso de Desarrollo Web.'
),

(
'Juan Pérez',
'juan@gmail.com',
'Consulta sobre horarios disponibles.'
),

(
'Sofía Vargas',
'sofia@gmail.com',
'Quiero matricularme en MySQL.'
),

(
'Luis Mora',
'luis@gmail.com',
'Necesito información de cursos.'
);