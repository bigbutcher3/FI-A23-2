$(function () {
    $('#imgDownload').DataTable({
        "language": {
            "url": "../plugins/dataTables.german.json"
        },
    });
    $('#datatablesTest').DataTable({
        "language": {
            "url": "../plugins/dataTables.german.json"

        },

    });

    $('#maurer').DataTable({

        "language": {
            "url": "../plugins/dataTables.german.json"
        },
    });
    $('#datensaetze').DataTable({
        "scrollX": true,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column',
            }
        ],
        "language": {
            "url": "../plugins/dataTables.german.json"
        },
    });
    $('#test').DataTable({
        "language": {
            "url": "../plugins/dataTables.german.json"
        },
    });
})
;

