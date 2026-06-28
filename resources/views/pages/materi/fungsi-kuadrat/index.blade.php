<div class="container bg-white rounded-3 py-3" id="tujuan-pembelajaran">
    <h3 style="text-align: center;">FUNGSI KUADRAT</h3>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button
                    class="accordion-button bg-slate"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                    <img
                        src="{{
                            asset('assets/img/app/capaian-pembelajaran.png')
                        }}"
                        alt="icon"
                        class="icon"
                        width="200"
                    />
                </button>
            </h2>
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    @include('pages.materi.fungsi-kuadrat.capaian')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="false"
                    aria-controls="collapseTwo"
                >
                    <img
                        src="{{
                            asset('assets/img/app/tujuan-pembelajaran.png')
                        }}"
                        alt="icon"
                        class="icon"
                        width="200"
                    />
                </button>
            </h2>
            <div
                id="collapseTwo"
                class="accordion-collapse collapse"
                aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    @include('pages.materi.fungsi-kuadrat.tujuan')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseThree"
                    aria-expanded="false"
                    aria-controls="collapseThree"
                >
                    <img
                        src="{{ asset('assets/img/app/peta-konsep.png') }}"
                        alt="icon"
                        class="icon"
                        width="200"
                    />
                </button>
            </h2>
            <div
                id="collapseThree"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    @include('pages.materi.fungsi-kuadrat.peta')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse4"
                    aria-expanded="false"
                    aria-controls="collapse4"
                >
                    <img
                        src="{{ asset('assets/img/app/pendahuluan.png') }}"
                        alt="icon"
                        class="icon"
                        width="200"
                    />
                </button>
            </h2>
            <div
                id="collapse4"
                class="accordion-collapse collapse"
                aria-labelledby="headingThree"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    @include('pages.materi.fungsi-kuadrat.apersepsi')
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse5"
                    aria-expanded="false"
                    aria-controls="collapse5"
                >
                    <img
                        src="{{ asset('assets/img/app/ayo-mengingat.png') }}"
                        alt="icon"
                        class="icon"
                        width="200"
                    />
                </button>
            </h2>
            <div
                id="collapse5"
                class="accordion-collapse collapse"
                aria-labelledby="heading5"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body">
                    @include('pages.materi.fungsi-kuadrat.mengingat')
                </div>
            </div>
        </div>
    </div>
</div>