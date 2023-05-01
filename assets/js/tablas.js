//Tabla para Contribuyentes
export function contributorsTable() {
  return new gridjs.Grid({
    columns: [
      {
        name: "Id",
      },
      {
        name: "Razon Social",
      },
      {
        name: "Licencia",
      },
      {
        name: "Registro",
      },
      {
        name: "Rif/Cedula",
      },
      {
        name: "Celular",
      },
      {
        name: "Local",
      },
      {
        name: "Editar",
        formatter: (_, row) =>
          gridjs.html(
            `<a href="index.php?view=contributor_edit&id=${row.cells[0].data}"><i class="bi bi-pencil-square"></i></a>`
          ),
        sort: false,
      },
      {
        name: "Eliminar",
        formatter: (_, row) =>
          gridjs.html(
            `<a href=".?view=contributor_list&contributor_delete=${row.cells[0].data}" onclick="return confirm('Confirmas borrar el registro?');"><i class="bi bi-trash"></i></a>`
          ),
        sort: false,
      },
    ],
    server: {
      url: "http://localhost/invoices_project/data/datas.php?datas=contributors",
      then: (data) =>
        data.map((card) => [
          card.id,
          card.razon_social,
          card.licencia,
          card.registro,
          card.rif_cedula,
          card.telefono_celular,
          card.telefono_local,
        ]),
    },
    sort: {
      enabled: true,
    },
    search: {
      enabled: true,
    },
    pagination: {
      enabled: true,
      limit: 10,
      summary: true,
    },
  }).render(document.getElementById("table_contributors"));
}

//Tabla para Seleccionar Contribuyentes
export function newInvoiceTable() {
  return new gridjs.Grid({
    columns: [
      {
        name: "Contribuyentes",
      },
      {
        name: "Licencia",
      },
      {
        name: "Registro",
      },
      {
        name: "Seleccionar",
        formatter: (_, row) =>
          gridjs.html(
            `<a href=".?view=invoice_new&id=${row.cells[3].data}"><i class="bi bi-check-circle-fill"></i></a>`
          ),
        sort: false,
      },
    ],
    server: {
      url: "http://localhost/invoices_project/data/datas.php?datas=contributors",
      then: (data) =>
        data.map((card) => [
          card.razon_social,
          card.licencia,
          card.registro,
          card.id,
        ]),
    },
    style: { 
      td: { 
        'text-align': 'center'
      }
    },
    sort: {
      enabled: true,
    },
    search: {
      enabled: true,
    },
    pagination: {
      enabled: true,
      limit: 10,
      summary: false,
    },
  }).render(document.getElementById("table_new_invoice"));
}

//Tabla para Recibos
export function invoiceTable() {
  return new gridjs.Grid({
    columns: [
      {
        name: "ID",
      },
      {
        name: "Razon Social",
      },
      {
        name: "Tipo",
      },
      {
        name: "Item 1",
      },
      {
        name: "Valor",
      },
      {
        name: "Monto Total",
      },
      {
        name: "Ver",
        formatter: (_, row) =>
          gridjs.html(
            `<a target="_blank" href="/invoices_project/invoices/invoice.php?id=${row.cells[0].data}"><i class="bi bi-eye"></i></a>`
          ),
        sort: false,
      },
    ],
    server: {
      url: "http://localhost/invoices_project/data/datas.php?datas=invoices",
      then: (data) =>
        data.map((card) => [
          card.id, card.razon_social, card.tipo, card.item1, card.item1_valor, card.monto_total
        ]),
    },
    style: { 
      td: { 
        'text-align': 'center'
      }
    },
    sort: {
      enabled: true,
    },
    search: {
      enabled: true,
    },
    pagination: {
      enabled: true,
      limit: 10,
      summary: true,
    },
  }).render(document.getElementById("table_invoices"));
}

//Tabla para Seleccionar Contribuyentes
export function newInvoiceServiceTable() {
  return new gridjs.Grid({
    columns: [
      {
        name: "Contribuyentes",
      },
      {
        name: "Licencia",
      },
      {
        name: "Registro",
      },
      {
        name: "Seleccionar",
        formatter: (_, row) =>
          gridjs.html(
            `<a href=".?view=invoice_service_new&id=${row.cells[3].data}"><i class="bi bi-check-circle-fill"></i></a>`
          ),
        sort: false,
      },
    ],
    server: {
      url: "http://localhost/invoices_project/data/datas.php?datas=contributors",
      then: (data) =>
        data.map((card) => [
          card.razon_social,
          card.licencia,
          card.registro,
          card.id,
        ]),
    },
    style: { 
      td: { 
        'text-align': 'center'
      }
    },
    sort: {
      enabled: true,
    },
    search: {
      enabled: true,
    },
    pagination: {
      enabled: true,
      limit: 10,
      summary: false,
    },
  }).render(document.getElementById("table"));
}
