//Tabla para propiedades
export function propertytable() {
  return new gridjs.Grid({
    columns: [
      {
        name: "Id",
      },
      {
        name: "Titulo",
      },
      {
        name: "Tipo",
      },
      {
        name: "Estado",
      },
      {
        name: "Ubicacion",
      },
      {
        name: "Precio",
      },
      {
        name: "Ciudad",
      },
      {
        name: "Publicado por",
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
            `<a href="index.php?view=contributor_list&property_id_del=${row.cells[0].data}" onclick="return confirm('Confirmas borrar la propiedad?');"><i class="bi bi-trash"></i></a>`
          ),
        sort: false,
      },
    ],
    server: {
      url: "http://localhost/realstate/inc/datas.php?datas=property",
      then: (data) =>
        data.map((card) => [card.property_id, card.property_title, card.property_type, card.property_transaction_type, card.property_location, card.property_price, card.property_city, card.property_publicby]),
    },
    sort: {
      enabled: true,
    },
    search: {
      enabled: true,
    },
    pagination: {
      enabled: true,
      limit: 15,
      summary: true,
    },
  }).render(document.getElementById("table_property"));
}

//Tabla para Tipos de propiedades

export function typetable() {
  return new gridjs.Grid({
    columns: [
      {
        name: "Identificador",
      },
      {
        name: "Tipo",
        width: "100%",
      },
      {
        name: "Eliminar",
        formatter: (_, row) =>
          gridjs.html(
            `<a href="index.php?view=type_list&type_id_del=${row.cells[0].data}" onclick="return confirm('Confirmas borrar el tipo?');"><i class="bi bi-trash"></i></a>`
          ),
        sort: false,
      },
    ],
    server: {
      url: "http://localhost/realstate/inc/datas.php?datas=type",
      then: (data) => data.map((card) => [card.type_id, card.type_name]),
    },
    search: {
      enabled: true,
    },
    sort: true,
    pagination: {
      enabled: true,
      limit: 10,
      summary: true,
    },
  }).render(document.getElementById("table_type"));
}

//Tabla para Ciudades

export function cityTable() {
  return new gridjs.Grid({
    columns: [
      {
        name: "Identificador",
      },
      {
        name: "Ciudad",
        width: "100%",
      },
      {
        name: "Eliminar",
        formatter: (_, row) =>
          gridjs.html(
            `<a href="index.php?view=city_list&city_id_del=${row.cells[0].data}" onclick="return confirm('Confirmas borrar la Ciudad?');"><i class="bi bi-trash"></i></a>`
          ),
        sort: false,
      },
    ],
    server: {
      url: "http://localhost/realstate/inc/datas.php?datas=city",
      then: (data) => data.map((card) => [card.city_id, card.city_name]),
    },
    search: {
      enabled: true,
    },
    sort: true,
    pagination: {
      enabled: true,
      limit: 10,
      summary: true,
    },
  }).render(document.getElementById("table_city"));
}
