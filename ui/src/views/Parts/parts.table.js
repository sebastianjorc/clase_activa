export const PARTS_COLUMNS = [
  {
    field: 'id',
    label: 'ID',
    width: '40',
    numeric: true
  },
  {
    field: 'name',
    label: 'Nombre',
    searchable: true
  },
  {
    field: 'description',
    label: 'Descripción',
    searchable: true
  },
  {
    field: 'active',
    label: 'Activo'
  }
];

export const STOCKS_COLUMNS = [
  {
    field: 'id',
    label: 'ID',
    width: '40',
    numeric: true
  },
  {
    field: 'part',
    label: 'Producto',
    searchable: true
  },
  {
    field: 'quantity',
    label: 'Unidades',
    numeric: true
  },
  {
    field: 'price',
    label: 'Precio',
    numeric: true
  }
]