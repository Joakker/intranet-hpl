<script lang="ts" setup>
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const divide3 = <T,>(array: T[]): [T[], T[], T[]] => {
  const total = array.length
  const chunk = Math.ceil(total / 3)

  const a1 = array.slice(0, chunk)
  const a2 = array.slice(chunk, chunk * 2)
  const a3 = array.slice(chunk * 2)

  return [a1, a2, a3]
}

const response1 = await fetch('/api/docs/14')
const adminPersonas: Documento[] = await response1.json()
const [f1, f2, f3] = divide3(adminPersonas)

const response2 = await fetch('/api/docs/15')
const saludOcupacional: Documento[] = await response2.json()
const [s1, s2, s3] = divide3(saludOcupacional)

const response3 = await fetch('/api/docs/16')
const bienestar: Documento[] = await response3.json()

const response4 = await fetch('/api/docs/17')
const capacitacion: Documento[] = await response4.json()

const response5 = await fetch('/api/docs/18')
const activacionCargo: Documento[] = await response5.json()
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="text-center text-3xl font-semibold">Subdirección de las Personas</h1>
    <div class="h-6" />

    <div class="grid w-full lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Administración de las Personas" :documentos="f1" />
      <DocumentoSda nombre="Administración de las Personas (Cont.)" :documentos="f2" />
      <DocumentoSda nombre="Administración de las Personas (Cont.)" :documentos="f3" />
    </div>
    <div class="h-4" />

    <div class="grid w-full lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Salud Ocupacional y Prevención de Riesgos" :documentos="s1" />
      <DocumentoSda nombre="Salud Ocupacional y Prevención de Riesgos (Cont.)" :documentos="s2" />
      <DocumentoSda nombre="Salud Ocupacional y Prevención de Riesgos (Cont.)" :documentos="s3" />
    </div>
    <div class="h-4" />

    <div class="grid w-full lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Bienestar" :documentos="bienestar" />
      <DocumentoSda nombre="Capacitación" :documentos="capacitacion" />
      <DocumentoSda nombre="Formato Activación de Cargo" :documentos="activacionCargo" />
    </div>
  </div>
</template>
