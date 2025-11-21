# Estándares de Grupos de Práctica (HL7 PRA-2)

## Propósito
Los **Grupos de Práctica** en IRIS permiten organizar a los profesionales en equipos funcionales o administrativos. Esto es esencial para:
1.  **Gestión de Turnos**: Asignar horarios rotativos a grupos completos (ej. "Residentes", "Guardia Nocturna").
2.  **Reportes Agrupados**: Generar estadísticas de productividad por departamento (ej. "Departamento de Retina").
3.  **Control de Acceso**: Limitar la visibilidad de ciertos pacientes a grupos específicos.

## Alineación con HL7
Este componente implementa el segmento **PRA-2 (Practitioner Group)** del estándar HL7.
*   Permite asociar un profesional a múltiples grupos simultáneamente (ej. un médico puede ser parte de "Oftalmología General" y "Comité de Ética").

## Implementación en Base de Datos (MySQL)

La tabla `iris_groups` gestiona la relación uno-a-muchos entre profesionales y sus grupos de práctica.

```sql
CREATE TABLE `iris_groups` (
  `group` VARCHAR(13) NOT NULL COMMENT 'ID único de la asignación',
  `professional` VARCHAR(13) NOT NULL,
  `group_code` VARCHAR(50) NOT NULL COMMENT 'PRA-2: Grupo de práctica (e.g., RETINA, GLAUCOMA)',
  `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
  
  PRIMARY KEY (`group`),
  CONSTRAINT `fk_prof_group` FOREIGN KEY (`professional`) REFERENCES `iris_professionals` (`professional`) ON DELETE CASCADE,
  INDEX `idx_group` (`group_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Múltiples grupos de práctica por profesional (PRA-2)';
```
