# Plan de Mejora del README.md del Módulo Iris

## Objetivo
Expandir y profesionalizar el archivo `README.md` para que sirva como punto de entrada completo al módulo Iris, detallando su propósito, arquitectura, estándares y estructura de documentación.

## Cambios Propuestos

### 1. Descripción General
*   Ampliar la introducción para explicar no solo qué hace (diagnóstico AI), sino cómo se integra en el ecosistema hospitalario.

### 2. Características Clave
*   Listar funcionalidades principales:
    *   Análisis de imágenes con IA.
    *   Interoperabilidad HL7 (ADT, ORM, ORU).
    *   Gestión avanzada de profesionales (Multi-especialidad, Multi-grupo).
    *   Soporte DICOM (mencionado en contexto).

### 3. Arquitectura de Datos
*   Describir brevemente el modelo de datos central (Profesionales, Especialidades, Grupos).
*   Mencionar la separación entre conceptos funcionales (Asignaciones) y organizacionales (Membresías).

### 4. Mapa de Documentación
*   Crear una tabla o lista clara que guíe al desarrollador a través de la carpeta `Docs/`.
    *   `Docs/STANDARDS.md`: Índice de estándares.
    *   `Docs/Standards/PROFESSIONALS.md`: Gestión de staff.
    *   `Docs/Standards/SPECIALTIES.md`: Catálogo de especialidades.
    *   `Docs/Standards/ASSIGNMENTS.md`: Competencias técnicas.
    *   `Docs/Standards/GROUPS.md`: Catálogo de grupos.
    *   `Docs/Standards/MEMBERSHIPS.md`: Afiliaciones organizacionales.

### 5. Tecnologías
*   Mencionar el stack tecnológico (PHP/CodeIgniter 4, MySQL, Python/AI services si aplica).

## Verificación
*   Revisar visualmente el renderizado del Markdown.
*   Verificar que todos los enlaces a la documentación interna funcionen.
