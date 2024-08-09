@extends('layouts.dashboard')

@section('styles')
    @parent
    <link href="{{ asset('selectize/css/selectize.css') }}" rel="stylesheet">

    <link href="{{ asset('tracklead/css/manage-publisher.css') }}" rel="stylesheet">
    <style>
        .selectize-control {
            width: 135px;
        }

        .topFilter {
            display: block;
            flex-wrap: nowrap;
            padding: 6px 8px;
            background: #fff;
        }

        .topFilter .form-control.selectConrol {
            padding: 4px 0;
            cursor: pointer;
            font-size: 13px;
            color: #6e707e;
            height: 32px;
            border-radius: 2px;
            width: 110px;
            margin-right: 8px;
        }

        .btnFilterWrap {
            right: 9px;
            position: absolute;
        }

    </style>
@endsection

@section('pageTitle')
    <a href="#" class="nav-link">Reports</a>
@endsection

@section('content')
    <div class="row m-0">

        <div class="col-lg-12">
            <div class="card equalHeight-1 bg-shadow list mb-4">
                <div class="card-body p-0">

                    <div class="topFilter pt-3">

                        <div class="row align-items-center m-0">
                            <div class="col-lg-12 col-sm-12">

                                <div class="row align-items-center">

                                    <select name="pub_status" class="form-control selectConrol">
                                        <option value="1">Campaign</option>
                                        <option value="0">Pending</option>
                                        <option value="2">Denied</option>
                                    </select>

                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- jhkjhk -->

                    <div class="fancyScroll">

                        <div class="table-responsive">
                            <table class="table-borderless table-centered table-nowrap cTable table">

                                <thead>
                                    <tr role="row">
                                        <th show>Date</th>
                                        <th class="grpChkBoxClickIP">campaign_id</th>
                                        <th class="grpChkBoxClickGeo">ip_address</th>
                                        <th class="grpChkBoxBrowser">device</th>
                                        <th class="grpChkBoxDeviceType">os</th>
                                        <th class="grpChkBoxDeviceOS">os_version</th>
                                        <th class="grpChkBoxDeviceOS">browser</th>
                                        <th class="grpChkBoxDeviceOS">browser_version</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($clicks as $click)
                                        <tr>
                                            <td>{{ $click->created_at }}</td>
                                            <td>{{ $click->campaign_id }}</td>
                                            <td>{{ $click->ip_address }}</td>
                                            <td>{{ $click->device }}</td>
                                            <td>{{ $click->os }}</td>
                                            <td>{{ $click->os_version }}</td>
                                            <td>{{ $click->browser }}</td>
                                            <td>{{ $click->browser_version }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>sdf</td>
                                        </tr>
                                    @endforelse

                                </tbody>

                            </table>
                        </div>

                    </div>

                    <div class="paginate row m-0">
                        <div class="totalResult col-lg-6 align-self-center">
                            <p class="m-0 mt-0">1-50 of 491 entries</p>
                        </div>
                        <div class="col-lg-6">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('selectize/js/selectize.min.js') }}"></script>
@endsection