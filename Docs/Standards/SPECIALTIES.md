# Estándares de Especialidades (HL7 PRA-5)

## Propósito
Las **Especialidades** en IRIS definen el área de experticia clínica de un profesional. Este componente es crucial para:
1.  **Filtrado de Profesionales**: Permitir asignar turnos o pacientes al especialista adecuado (ej. Glaucoma vs. Retina).
2.  **Validación de Procedimientos**: Asegurar que un médico solo realice procedimientos para los cuales está calificado.
3.  **Interoperabilidad**: Mapear las especialidades internas con códigos estandarizados (como la Tabla 0146 de HL7).

## Alineación con HL7
Este componente implementa el segmento **PRA-5 (Specialty)** del estándar HL7.
*   Permite múltiples repeticiones, lo que significa que un médico puede tener más de una especialidad.

## Implementación en Base de Datos (MySQL)

La tabla `iris_specialties` gestiona la relación uno-a-muchos entre profesionales y sus especialidades.

```sql
CREATE TABLE `iris_specialties` (
  `specialty` VARCHAR(13) NOT NULL COMMENT 'ID único de la asignación',
  `professional` VARCHAR(13) NOT NULL,
  `specialty_code` VARCHAR(20) NOT NULL COMMENT 'PRA-5: Código de especialidad (ej. HL7 Table 0146)',
  `is_primary` TINYINT(1) DEFAULT 0 COMMENT 'Indica si es la especialidad principal',
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  
  PRIMARY KEY (`specialty`),
  CONSTRAINT `fk_prof_spec` FOREIGN KEY (`professional`) REFERENCES `iris_professionals` (`professional`) ON DELETE CASCADE,
  INDEX `idx_specialty` (`specialty_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Múltiples especialidades por profesional (PRA-5)';
```
