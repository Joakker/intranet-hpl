<script setup lang="ts">
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const response1 = await fetch('/api/docs/1')
const formatoPresentaciones: Documento[] = await response1.json()

const response2 = await fetch('/api/docs/2')
const abastecimientoLogistica: Documento[] = await response2.json()

const response3 = await fetch('/api/docs/3')
const areaGestionFinanciera: Documento[] = await response3.json()

const response4 = await fetch('/api/docs/4')
const areaTIC: Documento[] = await response4.json()

/*
 {
    nombre: 'Nomina actualizada de telefonos de Hospital Higueras',
    ruta: 'http://10.6.70.133/ges_hospital2014/Principal.php',
  },
  {
    nombre: 'Nomina actualizada de telefonos de Hospital de Tome',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_apoyo_logistico/anexos_ht.pdf',
  },
  */
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
