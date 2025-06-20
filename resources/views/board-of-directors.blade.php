@extends('layouts.app')

@section('content')

<section class="relative w-full h-[150px] md:h-[310px] overflow-hidden">
    <!-- Background Video -->

    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col h-full pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col gap-6">
                <div class="w-full h-full flex flex-col text-[#107BA2] gap-0">
                    <div class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px] md:pt-[20px]">
                        Board of Directors
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-[80px]">
    <div class="wrapper">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-6 font-inter">
            <!-- Stasha Jordan -->
            <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col cursor-pointer hover:shadow-xl hover:-rotate-1 hover:scale-105 transition-all duration-300 ease-in-out" onclick="openModal('stasha')">
                <img src="{{ asset('images/stasa.jpg') }}" alt="Ms Stasha Jordan" class="w-full object-cover">
                <div class="p-6">
                    <p class="text-lg font-bold text-[#107ba2]">Ms Stasha Jordan</p>
                    <p class="text-[#107ba2] text-lg">Executive Director</p>
                </div>
            </div>

            <!-- Jeremy Druker -->
            <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col cursor-pointer hover:shadow-xl hover:rotate-1 hover:scale-105 transition-all duration-300 ease-in-out" onclick="openModal('jeremy')">
                <img src="{{ asset('images/jeremy.jpg') }}" alt="Mr Jeremy Druker" class="w-full object-cover">
                <div class="p-6">
                    <p class="text-lg font-bold text-[#107ba2]">Mr Jeremy Druker</p>
                    <p class="text-[#107ba2] text-lg">Chairperson</p>
                </div>
            </div>

            {{-- <!-- Suzanne Delport -->
            <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col cursor-pointer hover:shadow-xl transition-shadow" onclick="openModal('suzanne')">
                <img src="{{ asset('images/gray-block1.png') }}" alt="Prof Suzanne Delport" class="w-full object-cover">
                <div class="p-6">
                    <p class="text-lg font-bold text-[#107ba2]">Prof Suzanne Delport</p>
                    <p class="text-[#107ba2] text-lg">Director</p>
                </div>
            </div>

            <!-- Mhleli Masango -->
            <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col cursor-pointer hover:shadow-xl transition-shadow" onclick="openModal('mhleli')">
                <img src="{{ asset('images/gray-block1.png') }}" alt="Dr Mhleli Masango" class="w-full object-cover">
                <div class="p-6">
                    <p class="text-lg font-bold text-[#107ba2]">Dr Mhleli Masango</p>
                    <p class="text-[#107ba2] text-lg">Director</p>
                </div>
            </div> --}}

            <!-- Ayanda Ntsho -->
            <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col cursor-pointer hover:shadow-xl hover:-rotate-1 hover:scale-105 transition-all duration-300 ease-in-out" onclick="openModal('ayanda')">
                <img src="{{ asset('images/ayanda.jpg') }}" alt="Mr Ayanda Ntsho" class="w-full object-cover">
                <div class="p-6">
                    <p class="text-lg font-bold text-[#107ba2]">Mr Ayanda Ntsho</p>
                    <p class="text-[#107ba2] text-lg">Director</p>
                </div>
            </div>

            <!-- Ziyanda Buthelezi -->
            <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col cursor-pointer hover:shadow-xl hover:rotate-1 hover:scale-105 transition-all duration-300 ease-in-out" onclick="openModal('ziyanda')">
                <img src="{{ asset('images/ziyanda.jpg') }}" alt="Ziyanda Buthelezi" class="w-full object-cover">
                <div class="p-6">
                    <p class="text-lg font-bold text-[#107ba2]">Ziyanda Buthelezi</p>
                    <p class="text-[#107ba2] text-lg">Director</p>
                </div>
            </div>

            <!-- Nomathemba Chandiwana -->
            <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col cursor-pointer hover:shadow-xl hover:-rotate-1 hover:scale-105 transition-all duration-300 ease-in-out" onclick="openModal('nomathemba')">
                <img src="{{ asset('images/nom.jpg') }}" alt="Dr Nomathemba Chandiwana" class="w-full object-cover">
                <div class="p-6">
                    <p class="text-lg font-bold text-[#107ba2]">Dr Nomathemba Chandiwana</p>
                    <p class="text-[#107ba2] text-lg">Director</p>
                </div>
            </div>

            <!-- Johanna Mosime -->
            <div class="bg-white rounded-2xl border border-gray-300 overflow-hidden shadow-lg flex flex-col cursor-pointer hover:shadow-xl hover:rotate-1 hover:scale-105 transition-all duration-300 ease-in-out" onclick="openModal('johanna')">
                <img src="{{ asset('images/johanna.jpg') }}" alt="Johanna Mosime" class="w-full object-cover">
                <div class="p-6">
                    <p class="text-lg font-bold text-[#107ba2]">Johanna Mosime</p>
                    <p class="text-[#107ba2] text-lg">Director</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="directorModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">
        <div class="sticky top-0 bg-white border-b border-gray-200 p-4 flex justify-between items-center">
            <h2 id="modalTitle" class="text-2xl font-bold text-[#107ba2]"></h2>
            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl font-bold">×</button>
        </div>
        <div class="p-6">
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/3 flex-shrink-0">
                    <img id="modalImage" src="" alt="" class="w-full rounded-lg object-cover">
                </div>
                <div class="md:w-2/3">
                    <div id="modalContent" class="text-gray-700 leading-relaxed"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
const directorsData = {
    stasha: {
        name: "Staša Kerševan Jordan – Executive Director & Founding Member",
        image: "{{ asset('images/stasa.jpg') }}",
        bio: `Staša Kerševan Jordan is the Executive Director and founding member of the South African Breastmilk Reserve (SABR). Since 2003, she has championed human milk banking and neonatal health, expanding services to support very-low-birth-weight infants across neonatal intensive care units nationwide. Under her leadership, SABR has provided life-saving donor breastmilk to over 50,000 newborns. Staša has driven strategic initiatives, including the launch of the SoSAFE Pasteurizer, ensuring increased accessibility and safety of donated breastmilk.
        In addition to her work at SABR, Staša served as Co-Chair of the South African Coalition for Women's, Adolescents', and Children's Health (SACSoWACH) from 2016 to 2020. She is actively involved in maternal, neonatal, and child health policies through various technical working groups under the National Department of Health. Staša also supports research at the School of Pharmacy, University of Pretoria, and the SAMRC Kalafong units. A respected voice in public health advocacy, she frequently engages with the media and speaks at national and international healthcare forums.`
    },
    jeremy: {
        name: "Jeremy Druker – Chairperson & Founding Member",
        image: "{{ asset('images/jeremy.jpg') }}",
        bio: `Jeremy Druker is an independent IT consultant specializing in digital payment solutions, with a career spanning nearly 40 years in media and telecommunications. He played a pivotal role in establishing one of South Africa's first internet links in the early 1990s and has assisted clients such as Naspers and M-Net in developing world-class technology solutions. Jeremy has been deeply involved with the South African Breastmilk Reserve (SABR) since its inception in 2003 and became the chairperson of the board in 2018. His governance contributions have been instrumental in shaping the organization's impact, ensuring ethical leadership, and saving the lives of thousands of premature infants each year.

        <strong>Education:</strong> Bachelor of Science (Honours)`
    },
    suzanne: {
        name: "Prof Suzanne Delport – Director",
        image: "{{ asset('images/gray-block1.png') }}",
        bio: "Professor Suzanne Delport serves as a Director on the SABR board, bringing extensive expertise in her field to support the organization's mission of providing life-saving donor breastmilk to premature infants."
    },
    mhleli: {
        name: "Dr Mhleli Masango – Director",
        image: "{{ asset('images/gray-block1.png') }}",
        bio: "Dr Mhleli Masango serves as a Director on the SABR board, contributing medical expertise and strategic guidance to advance the organization's commitment to neonatal health and human milk banking."
    },
    ayanda: {
        name: "Ayanda Ntsho – Treasurer",
        image: "{{ asset('images/ayanda.jpg') }}",
        bio: `Ayanda Ntsho is a Chartered Accountant (CA) (SA) and a seasoned financial director and risk professional. He holds an MBA, B.Com Honours in Accounting, and a National Diploma in Cost & Management Accounting. With extensive expertise in financial reporting, mergers & acquisitions, and corporate governance, Ayanda has successfully led risk-based audits and enterprise risk management strategies in organizations with over 3,000 employees.
        Ayanda is skilled in GAAP, IFRS, PFMA, Treasury Regulations, and the Companies Act, ensuring compliance and financial sustainability. He has implemented cost-reduction programs, performance metrics, and financial systems that drive operational efficiency. Since joining the SABR board as Treasurer in 2016, he has provided critical oversight on financial sustainability, ensuring strategic resource allocation and risk mitigation.

        <strong>Education:</strong> CA (SA), MBA, B.Com Honours (Accounting), Advanced Auditing Certificate`
    },
    ziyanda: {
        name: "Ziyanda Buthelezi – Board Member",
        image: "{{ asset('images/ziyanda.jpg') }}",
        bio: `Ziyanda Buthelezi is a regulatory and policy affairs expert with extensive experience in competition law, broadcasting regulations, and intellectual property law. She holds an LLB from the University of KwaZulu-Natal, advanced diplomas in Company Law and Competition Law from the University of Witwatersrand, and specialized certifications in Copyright and Trademark Law from SAIIP. Admitted as an Attorney of the High Court in 2011, she has built a distinguished career spanning media, telecommunications, and competition law enforcement.
        Ziyanda has held senior regulatory roles at MultiChoice Africa, the Competition Commission South Africa, and Econet Media Limited, where she managed legal compliance, stakeholder engagement, and policy development across multiple jurisdictions. She is a lecturer at Wits University and has contributed to industry research, co-authoring papers on competition law and policy. Her strategic expertise in regulatory compliance and governance strengthens SABR's commitment to ethical leadership and sustainable growth.

        <strong>Education:</strong> LLB (UKZN), Advanced Diplomas in Company & Competition Law (Wits), Copyright & Trademark Law (SAIIP)`
    },
    nomathemba: {
        name: "Dr. Nomathemba Chandiwana – Medical Director",
        image: "{{ asset('images/nom.jpg') }}",
        bio: `Dr. Nomathemba Chandiwana is a Principal Scientist and Director at Ezintsha, University of the Witwatersrand, with a research focus on cardiometabolic challenges in HIV treatment and cost-effective antiretroviral therapy, particularly for women. She holds an MBChB, Master of Public Health (MPH), Diploma in Child Healthcare (DCH), and a Higher Diploma in HIV Management & Sexual Health.
        Dr. Chandiwana is the Research Director at the Restonic-Ezintsha Sleep Clinic, investigating obesity and obstructive sleep apnea among people living with HIV. She has led international clinical trials on HIV and COVID-19 therapies, contributing to policy development and publishing in high-impact scientific journals. Since 2018, she has served as a non-executive medical director at SABR, ensuring that milk banking aligns with scientific advancements and public health priorities.

        <strong>Education:</strong> MBChB, MPH, DCH, HIV & Sexual Health Diploma`
    },
    johanna: {
        name: "Johanna Salome Mosime – Board Member",
        image: "{{ asset('images/johanna.jpg') }}",
        bio: `Johanna Salome Mosime is a healthcare executive with expertise in corporate governance, hospital management, and medical schemes. She is an Ordinary Member of the Institute of Directors South Africa (IoDSA) and has completed the Trustee Development Programme through the Board of Healthcare Funders (BHF), with a strong foundation in King IV corporate governance principles.
        As Group Funder Relations Officer at Clinix Health Group, Johanna has successfully negotiated hospital network contracts, exceeded financial targets, and maintained key industry partnerships. She has previously led case management strategies, worked in claims auditing, and helped optimize operational efficiencies in private healthcare. She is a key asset in financial sustainability and policy advocacy within SABR.

        <strong>Education:</strong> MBA (Healthcare), Trustee Development Programme, Diplomas in Nursing & Project Management`
    }
};

function openModal(directorKey) {
    const director = directorsData[directorKey];
    if (!director) return;

    document.getElementById('modalTitle').textContent = director.name;
    document.getElementById('modalImage').src = director.image;
    document.getElementById('modalImage').alt = director.name;
    document.getElementById('modalContent').innerHTML = director.bio.replace(/\n/g, '<br><br>');
    
    document.getElementById('directorModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('directorModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('directorModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});
</script>

@endsection