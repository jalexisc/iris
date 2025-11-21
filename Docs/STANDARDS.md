# Estándares y Protocolos

## HL7 (Health Level Seven)

El módulo **IRIS** (Intelligent Retinal Imaging System) fundamenta su arquitectura de información y gestión de datos clínicos en el estándar **HL7 (Health Level Seven)**.

La adopción de HL7 garantiza la **interoperabilidad**, integridad y estandarización en el intercambio de información electrónica de salud, permitiendo la integración con sistemas hospitalarios (HIS), RIS y EMR.

### Documentación Detallada por Componente

Para facilitar la comprensión y el mantenimiento, la documentación de los estándares se ha desglosado en los siguientes componentes:

*   **[Pacientes (ADT)](Standards/PATIENTS.md)**: Gestión de identidad demográfica y flujos de admisión/actualización (Segmento PID).
*   **[Profesionales (Staff)](Standards/PROFESSIONALS.md)**: Gestión de perfiles médicos (Segmentos STF, PRA).
*   **[Especialidades](Standards/SPECIALTIES.md)**: Clasificación de experticia clínica (PRA-5).
*   **[Asignaciones](Standards/ASSIGNMENTS.md)**: Acreditación de especialidades a profesionales (Relación N:M).
*   **[Grupos de Práctica](Standards/GROUPS.md)**: Organización de equipos médicos (PRA-2).
*   **[Membresías](Standards/MEMBERSHIPS.md)**: Afiliación de profesionales a grupos (Relación N:M).
*   **[Episodios Clínicos](Standards/EPISODES.md)**: Manejo de visitas y encuentros (Segmento PV1).
*   **[Órdenes y Resultados](Standards/ORDERS_RESULTS.md)**: Flujos de solicitud de estudios y reporte de diagnósticos (Mensajes ORM y ORU, Segmentos OBR, OBX).

### Beneficios Generales
1.  **Consistencia de Datos**: Asegura que la información clínica se almacene y presente de forma coherente.
2.  **Escalabilidad**: Facilita la incorporación de nuevos módulos o la conexión con servicios externos.
3.  **Cumplimiento Normativo**: Alinea la plataforma con las mejores prácticas internacionales.
