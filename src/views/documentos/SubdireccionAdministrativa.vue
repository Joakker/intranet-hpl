<script setup lang="ts">
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const formatoPresentaciones: Documento[] = [
  {
    nombre: 'Formato 1',
    url: 'http://10.4.49.116/sist/documentos/Presentacion-gobCL%20hpl.pptx',
  },
  {
    nombre: 'Formato 2',
    url: 'http://10.4.49.116/sist/documentos/GobCL-PPT.pptx',
  },
]

const abastecimientoLogistica: Documento[] = [
  {
    nombre: 'Cumplimiento prestación de servicios.',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_abastecimiento/certificacion_cumplimiento_de_prestacion_de_servicios.docx',
  },
  {
    nombre: 'Formarto recepción de productos.',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_abastecimiento/formato_recepcion_de_productos2021.pdf',
  },
  {
    nombre: 'Formato solicitud de uso con cargo a convenio.',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_abastecimiento/formato_solicitud_uso_convenios2021.pdf',
  },
  {
    nombre: 'Formato requerimientos técnicos.',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_abastecimiento/pauta%20requisitos%20m%C3%ADnimos%202024.docx',
  },
  {
    nombre: 'Manual procedimiento de compras.',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_gestion_financiera/Manual_de_Procedimientos_de_compra.pdf',
  },
  {
    nombre: 'Manual Organizacional Abastecimiento.',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_gestion_financiera/Manual_Organizacional_Abastecimiento.pdf',
  },
  {
    nombre: 'Formulario para informar incumplimientos (Multa) de proveedores',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_abastecimiento/FORMULARIO%20PARA%20INFORMAR%20INCUMPLIMIENTOS%20(MULTA)%20DE%20PROVEEDORES.pdf',
  },
]

const areaGestionFinanciera: Documento[] = [
  {
    nombre: 'Protocolo Cesión de Facturas',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_gestion_financiera/protocolo_cesion_de_facturas.pdf',
  },
  {
    nombre: 'Protocolo Inventario',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_gestion_financiera/protocolo_inventario.pdf',
  },
]

const areaTIC: Documento[] = [
  {
    nombre: 'Formulario toma de requerimientos para desarrollo de sistemas internos',
    url: 'http://10.4.49.116/sist/documentos/Area%20Tic/Formulario%20Toma%20de%20Requerimientos.pdf',
  },
  {
    nombre: 'Nomina actualizada de telefonos de HPL',
    url: 'http://localhost:8080/Anexos.php',
  },
  {
    nombre: 'Nomina actualizada de telefonos de Hospital Higueras',
    url: 'http://10.6.70.133/ges_hospital2014/Principal.php',
  },
  {
    nombre: 'Nomina actualizada de telefonos de Hospital de Tome',
    url: 'http://10.4.49.116/sist/documentos/sda_cr_apoyo_logistico/anexos_ht.pdf',
  },
]
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="text-center text-3xl font-semibold">Subdirección Administrativa</h1>
    <div class="h-6" />
    <div id="documentos-list" class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Formato Presentaciones" :documentos="formatoPresentaciones" />
      <DocumentoSda nombre="Abastecimiento y Logística" :documentos="abastecimientoLogistica" />
      <DocumentoSda nombre="Área Gestión Financiera" :documentos="areaGestionFinanciera" />
      <DocumentoSda
        nombre="Área Tecnologías de la Información y Comunicaciones"
        :documentos="areaTIC"
      />
    </div>
  </div>
</template>
