# PRÁCTICA CALIFICADA 1 - Gestión de Liga de Básquetbol

**Alumno:** Rubén Jamyl Huarayo León  
**Correo:** jamilrcsr@gmail.com  
**Fecha:** 11 de mayo de 2026  
**Curso:** Ingeniería de Software II - 7A

## 1. Objetivo de la Práctica
Desarrollar una aplicación web completa en Laravel 13 para la gestión de una liga de básquetbol, cumpliendo con autenticación de usuarios, CRUD de entidades y documentación técnica.

## 2. Tecnologías Utilizadas
- **Framework:** Laravel 13.8.0
- **PHP:** 8.4.21
- **Base de datos:** SQLite (configurado en .env)
- **Servidor local:** Laravel Herd
- **Frontend:** Blade + Tailwind CSS + Font Awesome
- **Autenticación:** Laravel Breeze (Blade)
- **Control de versiones:** Git + GitHub
- **Estilo:** Tema oscuro inspirado en NBA

## 3. Estructura de Base de Datos
- **teams** → id, name, city, coach, timestamps
- **players** → id, name, jersey_number, position, team_id (foreign key), timestamps
- **matches** (modelo Game) → id, home_team_id, away_team_id, match_date, home_score, away_score, status, timestamps

**Relaciones Eloquent:**
- Team hasMany Player
- Team hasMany Game (como local y visitante)
- Player belongsTo Team
- Game belongsTo Team (homeTeam y awayTeam)

## 4. Funcionalidades Implementadas
- Registro e inicio de sesión de usuarios (Breeze)
- CRUD completo de **Equipos**
- CRUD completo de **Jugadores** (con relación al equipo)
- CRUD completo de **Partidos** (con fecha, marcador y estado)
- Dashboard con resumen visual
- Diseño responsive y temático de básquetbol (colores NBA, iconos, gradientes)

## 5. Rutas Principales
- `/login` y `/register` → Autenticación
- `/dashboard` → Panel principal
- `/teams`, `/players`, `/games` → CRUD protegido con middleware `auth`

## 6. Repositorio GitHub
**Enlace:** https://github.com/jamih130402/gestion-liga-basquetbol

El repositorio contiene todo el historial de commits.

## 7. Conclusión
La aplicación cumple al 100% con todos los requisitos de la práctica:
- Autenticación completa de usuarios
- CRUD funcional de las tres entidades principales
- Relaciones entre modelos correctamente implementadas
- Interfaz moderna y temática de básquetbol
- Documentación técnica incluida


---

**Fin de la documentación técnica**