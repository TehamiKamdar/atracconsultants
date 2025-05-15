@extends('layouts.web_main')
@push('title')
    Details - {{$uniName}}
@endpush
<style>
    .left::-webkit-scrollbar {
        display: none;
    }
</style>
@section('main-section')
    <div class="after-banner w-[90vw] mx-auto flex my-4 md:h-[80vh] md:flex-row flex-col">
        <div class="left md:w-[70%] cnt md:overflow-y-auto ">
            <div class="desc-top-2 mt-5">
                <div class="desc-top" id="desc">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">About {{$uniName}}</h1>
                    <p class="text-xl font-light">{!! $university->description !!}
                    </p>
                </div>

                <div class="container mt-5">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @if ($asscdepartments->isNotEmpty())
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1"
                                    type="button" role="tab" aria-controls="tab1" aria-selected="true">Departments for Associate
                                    Degree</button>
                            </li>
                        @endif

                        @if ($bachelordepartments->isNotEmpty())
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button"
                                    role="tab" aria-controls="tab2" aria-selected="false">Departments for Bachelors</button>
                            </li>
                        @endif
                        @if ($mastersdepartments->isNotEmpty())
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button"
                                    role="tab" aria-controls="tab3" aria-selected="false">Departments for Masters</button>
                            </li>
                        @endif
                        @if ($phddepartments->isNotEmpty())
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button"
                                    role="tab" aria-controls="tab4" aria-selected="false">Departments for Ph.D</button>
                            </li>
                        @endif
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="accordion" id="accordionExample">
                                @php $i = 0; @endphp
                                @foreach ($asscdepartments as $departmentName => $courses)
                                    @php
                                        $i++;
                                        $collapseId = 'collapse' . $i;
                                        $headingId = 'heading' . $i;
                                        $showClass = $i === 1 ? 'show' : '';
                                        $collapsed = $i === 1 ? '' : 'collapsed';
                                    @endphp

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="{{ $headingId }}">
                                            <button class="accordion-button {{ $collapsed }}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}"
                                                aria-expanded="{{ $i === 1 ? 'true' : 'false' }}"
                                                aria-controls="{{ $collapseId }}">
                                                Department Of {{ $departmentName }}
                                            </button>
                                        </h2>
                                        <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $showClass }}"
                                            aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                    @foreach ($courses as $course)
                                                        <li class="list-group-item">{{ $course->course_title }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="tab-pane fade p-3" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="accordion" id="accordionExample">
                                @php $i = 0; @endphp
                                @foreach ($bachelordepartments as $departmentName => $courses)
                                    @php
                                        $i++;
                                        $collapseId = 'collapse' . $i;
                                        $headingId = 'heading' . $i;
                                        $showClass = $i === 1 ? 'show' : '';
                                        $collapsed = $i === 1 ? '' : 'collapsed';
                                    @endphp

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="{{ $headingId }}">
                                            <button class="accordion-button {{ $collapsed }}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}"
                                                aria-expanded="{{ $i === 1 ? 'true' : 'false' }}"
                                                aria-controls="{{ $collapseId }}">
                                                {{ $departmentName }}
                                            </button>
                                        </h2>
                                        <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $showClass }}"
                                            aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                    @foreach ($courses as $course)
                                                        <li class="list-group-item">{{ $course->course_title }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="accordion" id="accordionExample">
                                @php $i = 0; @endphp
                                @foreach ($mastersdepartments as $departmentName => $courses)
                                    @php
                                        $i++;
                                        $collapseId = 'collapse' . $i;
                                        $headingId = 'heading' . $i;
                                        $showClass = $i === 1 ? 'show' : '';
                                        $collapsed = $i === 1 ? '' : 'collapsed';
                                    @endphp

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="{{ $headingId }}">
                                            <button class="accordion-button {{ $collapsed }}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}"
                                                aria-expanded="{{ $i === 1 ? 'true' : 'false' }}"
                                                aria-controls="{{ $collapseId }}">
                                                {{ $departmentName }}
                                            </button>
                                        </h2>
                                        <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $showClass }}"
                                            aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                    @foreach ($courses as $course)
                                                        <li class="list-group-item">{{ $course->course_title }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                            <div class="accordion" id="accordionExample">
                                @php $i = 0; @endphp
                                @foreach ($phddepartments as $departmentName => $courses)
                                    @php
                                        $i++;
                                        $collapseId = 'collapse' . $i;
                                        $headingId = 'heading' . $i;
                                        $showClass = $i === 1 ? 'show' : '';
                                        $collapsed = $i === 1 ? '' : 'collapsed';
                                    @endphp

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="{{ $headingId }}">
                                            <button class="accordion-button {{ $collapsed }}" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#{{ $collapseId }}"
                                                aria-expanded="{{ $i === 1 ? 'true' : 'false' }}"
                                                aria-controls="{{ $collapseId }}">
                                                {{ $departmentName }}
                                            </button>
                                        </h2>
                                        <div id="{{ $collapseId }}" class="accordion-collapse collapse {{ $showClass }}"
                                            aria-labelledby="{{ $headingId }}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ul class="list-group">
                                                    @foreach ($courses as $course)
                                                        <li class="list-group-item">{{ $course->course_title }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


@endsection

@section('scripts')
    <script>
        const tabButtons = document.querySelectorAll(".tab-btn");
        const tabContents = document.querySelectorAll(".tab-content");

        tabButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                const target = btn.getAttribute("data-tab");

                tabContents.forEach(content => content.classList.add("hidden"));
                document.getElementById(target).classList.remove("hidden");

                tabButtons.forEach(b => {
                    b.classList.remove("tab-active");
                });

                btn.classList.add("tab-active");
            });
        });
    </script>
@endsection