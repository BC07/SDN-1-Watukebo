@extends('layouts.static')
@section('homeContent')

<!-- partial:index.partial.html -->
<section id="tinggi-data-siswa">
<div style="overflow-x:auto;">
<div class="container tabel-siswa-margin-top">
        <div class="header_wrap">
            <div class="num_rows">

                <div class="form-group">
                    <!--		Show Numbers Of Rows 		-->
                    <select class="form-control" name="state" id="maxRows">
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="70">70</option>
                        <option value="100">100</option>
                        <option value="5000">Show ALL Rows</option>
                    </select>

                </div>
            </div>

            <div class="tb_search">
                <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()" placeholder="Search.."
                    class="form-control">
            </div>

        </div>

        <table class="table table-striped table-class" id="table-id">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>TTL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datasiswa as $_datasiswa)
                <tr>
                    <td>{{ $_datasiswa->name }}</td>
                    <td>{{ $_datasiswa->nis }}</td>
                    <td>{{ $_datasiswa->nisn }}</td>
                    <td>{{ $_datasiswa->ttl }}</td>
                </tr>
                @endforeach
            <tbody>
        </table>

        <!--		Start Pagination -->
        <div class='pagination-container'>
            <nav>
                <ul class="pagination" style="list-style-type: none;">
                    <!--	Here the JS Function Will Add the Rows -->
                </ul>
            </nav>
        </div>

        <div class="rows_count">
            Showing 11 to 20 of 91 entries
        </div>

    </div> <!-- 		End of Container -->
</div>

</section>

@endsection