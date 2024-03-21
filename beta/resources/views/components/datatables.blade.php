<link href="/datatables/datatables.min.css" rel="stylesheet">


<script src="/datatables/datatables.min.js"></script>

{{-- <script src="/js/datatables.js"></script> --}}

<style>
    span.dtr-data {
    display: inline-block;
    max-width: 1000px; /* Adjusted to be responsive */
    text-overflow: ellipsis;
    /* overflow: hidden; Added to hide overflow content */
    white-space: normal; Ensures text doesn't wrap
    text-align : justify;
}
@media screen and (min-width: 400px) {
    span.dtr-data {
        max-width: 250px; /* Adjust max-width for larger screens */
    }
}

@media screen and (min-width: 900px) {
    span.dtr-data {
        max-width: 500px; /* Adjust max-width for larger screens */
    }
}
@media screen and (min-width: 1200px) {
    span.dtr-data {
        max-width: 800px; /* Adjust max-width for larger screens */
    }
}

</style> 







