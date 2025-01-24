<x-layouts>
    <x-slot:head>
    @notifyCss
    </x-slot:head>
    <x-slot:slot>
        <div class="container my-5 vh-100 ">
        @include('notify::components.notify')
            <p class="text-center mb-4 fs-2 fw-bolder">Data On Oil Palm Smallholders Who Registered</p>
            <div class="table-responsive">
                <table id="dataTable" class="table table-bordered align-middle">
                    <thead class="table-light text-center">
                        <tr>
                            <th>ID</th>
                            <th>Oil Palm Smallholder Name</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <!-- Table Data -->
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center">{{ $user->username}}</td>
                            <td class="text-center">{{ $user->address }}</td>
                            <td class="text-center">{{ $user->phone }}</td>
                            <td class="text-center">
                                <a href="{{ route('identityDetail', $user->id) }}" class="text-primary">Identity</a> |
                                <a href="{{ route('plantationDetail', $user->id) }}" class="text-primary">Plantation</a> |
                                <a href="{{ route('ispoStandard', $user->id) }}" class="text-primary">ISPO Standard</a> |
                                <form action="{{ route('deleteIspo', $user->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-link text-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Add more rows if needed -->
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="d-flex justify-content-between">
                <p id="tableInfo"></p>
                <nav>
                    <ul id="pagination" class="pagination mb-0">
                        <li class="page-item disabled" id="prevBtn">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item active" id="page1"><a class="page-link">1</a></li>
                        <li class="page-item" id="nextBtn">
                            <a class="page-link">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </x-slot:slot>

    <x-slot:script>
        <!-- Include jQuery and Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js" integrity="sha512-zlWWyZq71UMApAjih4WkaRpikgY9Bz1oXIW5G0fED4vk14JjGlQ1UmkGM392jEULP8jbNMiwLWdM8Z87Hu88Fw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Toast Notification -->
        @notifyJs

        <!-- Pagination -->
        <script>
            // JavaScript for Pagination
            const rowsPerPage = 10;
            const table = document.getElementById("dataTable").getElementsByTagName("tbody")[0];
            const rows = Array.from(table.rows);
            let currentPage = 1;

            function displayTable(page) {
                const start = (page - 1) * rowsPerPage;
                const end = start + rowsPerPage;

                rows.forEach((row, index) => {
                    row.style.display = index >= start && index < end ? "" : "none";
                });

                document.getElementById("tableInfo").innerText =
                    `Showing ${Math.min(start + 1, rows.length)} to ${Math.min(end, rows.length)} of ${rows.length} entries`;
                updatePaginationButtons(page);
            }

            function updatePaginationButtons(page) {
                const prevBtn = document.getElementById("prevBtn");
                const nextBtn = document.getElementById("nextBtn");

                prevBtn.classList.toggle("disabled", page === 1);
                nextBtn.classList.toggle("disabled", page === Math.ceil(rows.length / rowsPerPage));
            }

            document.getElementById("prevBtn").addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    displayTable(currentPage);
                }
            });

            document.getElementById("nextBtn").addEventListener("click", () => {
                if (currentPage < Math.ceil(rows.length / rowsPerPage)) {
                    currentPage++;
                    displayTable(currentPage);
                }
            });

            displayTable(currentPage);
        </script>
    </x-slot:script>
</x-layouts>