<x-layouts>
    <div class="container my-5">
        <h4 class="border-bottom mb-4 pb-3">Data On Oil Palm Smallholders Who Fulfill ISPO Standards</h4>
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="text-center" style="width: 25%;">Oil Palm Smallholder Name</th>
                        <th class="text-center" style="width: 75%;">ISPO Documents</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="5" class="align-baseline text-center">Sumitro Purwasono</td>
                        <td>
                            <div>
                                <strong>Principle 1</strong>
                                <ul>
                                    <li>Land_Certificate.pdf <br>
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{ isset($ispo->sertifikatTanah) ? ('storage/ispo/' . $ispo->sertifikatTanah) : '#' }}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                    </li>
                                    <li>spatial_layout_determination.pdf <br>
                                        <p class="card-text  text-start"><a formtarget="_blank" target="_blank" href="{{ isset($ispo->penetapanTataRuang) ? ('storage/ispo/' . $ispo->penetapanTataRuang) : '#' }}" class="badge bg-dark px-3 py-2">Buka</a></p>
                                    </li>
                                    <li>Estate_Settlement_Document.pdf</li>
                                    <li>Crop_Agreement.pdf</li>
                                    <li>STDB.pdf</li>
                                    <li>Environmental_Permit_Letter.pdf</li>
                                    <li>Implementation_notes.pdf</li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Principle 2 -->
                    <tr>
                        <td>
                            <div>
                                <strong>Principle 2</strong>
                                <ul>
                                    <li>Letter_having_legalstanding.pdf</li>
                                    <li>Crop_plan_letter.pdf</li>
                                    <li>Participant_Activity_Report.pdf</li>
                                    <li>Activity_plan_document.pdf</li>
                                    <li>seed_planting_record.pdf</li>
                                    <li>SOP_seed_planting.pdf</li>
                                    <li>SOP_caring.pdf</li>
                                    <li>Planting_notes.pdf</li>
                                    <li>care_implementation_notes.pdf</li>
                                    <li>plant_fertilization_notes.pdf</li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Principle 3 -->
                    <tr>
                        <td>
                            <div>
                                <strong>Principle 3</strong>
                                <ul>
                                    <li>Fire_Prevention_and_Management.pdf</li>
                                    <li>Together.pdf</li>
                                    <li>The_Existence_of_Animals_and_Plants.pdf</li>
                                    <li>The_Existence_of_Animals_and_Plants_in_the_Garden_Area.pdf</li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Principle 4 -->
                    <tr>
                        <td>
                            <div>
                                <strong>Principle 4</strong>
                                <ul>
                                    <li>FFB Price Notes & Purchase Realization.pdf</li>
                                    <li>Service SOP.pdf</li>
                                    <li>Participation_Activity_Report.pdf</li>
                                    <li>SOP.pdf</li>
                                    <li>Response_to_Requests_for_Information_from_Stakeholders.pdf</li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Principle 5 -->
                    <tr>
                        <td>
                            <div>
                                <strong>Principle 5</strong>
                                <ul>
                                    <li>Business_Improvement.pdf</li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="table-light">
                    <tr>
                        <td class="text-center"><strong>ISPO Document Status</strong></td>
                        <td class="text-center">Applying for ISPO Certificate can now be done</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</x-layouts>