# Estándares de Profesionales (HL7 STF/PRA)

## Gestión de Profesionales de la Salud

En el módulo IRIS, los profesionales se gestionan siguiendo los segmentos **STF (Staff Identification)** y **PRA (Practitioner Detail)** de HL7.

### Estructura de Datos

#### 1. Identificación (Segmento STF)
Utilizado para la información básica y demográfica del personal.
*   **STF-1 (Primary Key Value - Staff ID)**: Identificador único del médico o profesional en el sistema.
*   **STF-2 (Staff Identifier List)**: Otros identificadores (e.g., Cédula de ciudadanía).
*   **STF-3 (Staff Name)**: Nombre completo estructurado.
*   **STF-10 (Phone)**: Números de contacto.
*   **STF-11 (Office/Home Address)**: Direcciones físicas.

#### 2. Detalles Profesionales (Segmento PRA)
Utilizado para la información específica de la práctica clínica.
*   **PRA-2 (Practitioner Group)**: Grupo o departamento al que pertenece (e.g., Retina, Glaucoma).
*   **PRA-5 (Specialty)**: Código de la especialidad médica.
*   **PRA-6 (Practitioner ID Numbers)**: Números de registro profesional o licencias médicas.
*   **PRA-7 (Privileges)**: Privilegios clínicos y autorizaciones dentro del sistema.

### Roles y Relaciones (ROL)
El sistema permite definir roles específicos para cada episodio clínico (e.g., Médico Tratante, Médico Referente, Consultor) utilizando estructuras compatibles con el segmento **ROL**.
