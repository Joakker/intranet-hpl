<script setup lang="ts">
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const divide = <T,>(array: T[]): [T[], T[], T[]] => {
  const total = array.length
  const chunk = Math.ceil(total / 3)

  const a1 = array.slice(0, chunk)
  const a2 = array.slice(chunk, chunk * 2)
  const a3 = array.slice(chunk * 2)

  return [a1, a2, a3]
}

const response1 = await fetch('/api/docs', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 5
  })
})
const formulariosClinicos: Documento[] = await response1.json()
const [f1, f2, f3] = divide(formulariosClinicos)

const response2 = await fetch('/api/docs', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 6
  })
})
const reglamentoInterno: Documento[] = await response2.json()

const response3 = await fetch('/api/docs', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 7
  })
})
const hospitalAmigo: Documento[] = await response3.json()

const response4 = await fetch('/api/docs', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 8
  })
})
const ucEmergencia: Documento[] = await response4.json()

const response5 = await fetch('/api/docs', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 9
  })
})
const ucPabellon: Documento[] = await response5.json()

const response6 = await fetch('/api/docs/', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 10
  })
})
const ucFarmacia: Documento[] = await response6.json()

const response7 = await fetch('/api/docs/', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 11
  })
})
const ucGinecoObstetricia: Documento[] = await response7.json()

const response8 = await fetch('/api/docs/', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 12
  })
})
const ucImagenologia: Documento[] = await response8.json()

const response9 = await fetch('/api/docs/', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify({
    "id": 13
  })
})
const ucEsterilizacion: Documento[] = await response9.json()
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="text-center text-3xl font-semibold">Subdirección Médica</h1>
    <div class="h-6" />

    <div class="grid w-full lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Formularios Clínicos" :documentos="f1" />
      <DocumentoSda nombre="Formularios Clínicos (Cont.)" :documentos="f2" />
      <DocumentoSda nombre="Formularios Clínicos (Cont.)" :documentos="f3" />
    </div>
    <div class="h-4" />
    <div class="grid w-full lg:grid-cols-5 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Reglamento Interno" :documentos="reglamentoInterno" />
      <DocumentoSda nombre="Hospital Amigo" :documentos="hospitalAmigo" />
      <DocumentoSda nombre="UC Emergencia" :documentos="ucEmergencia" />
      <DocumentoSda nombre="UC Pabellón" :documentos="ucPabellon" />
      <DocumentoSda nombre="UC Esterilización" :documentos="ucEsterilizacion" />
    </div>
    <div class="h-4" />
    <div class="grid w-full lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="UC Farmacia" :documentos="ucFarmacia" />
      <DocumentoSda nombre="UC Imagenología" :documentos="ucImagenologia" />
      <DocumentoSda nombre="UC Gineco-Obstetricia" :documentos="ucGinecoObstetricia" />
    </div>
  </div>
</template>
