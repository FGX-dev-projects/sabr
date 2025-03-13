@extends('layouts.app')

@section('content')
    <section class="relative w-full h-300px] md:h-[350px]  overflow-hidden">
        <!-- Background Video -->


        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col  h-full   pt-[10px] md:pt-[186px]">
            <div class="wrapper">
                <div class="w-full h-full flex flex-col     gap-6">
                    <div class="w-full h-full flex flex-col text-[#107BA2]   gap-0">
                        <div
                            class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px]  md:pt-[20px]">
                            Breast is Best
                        </div>
                        <p class="text-[24px] font-inter font-bold">
                            FAQs
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-[50px]">
        <div class="wrapper flex flex-col gap-6">
            <p class="text-[#868480] text-[24px] font-bold font-inter">Understanding Breastmilk Banking</p>
            <div class="w-full flex flex-col md:flex-row justify-start items-stretch gap-6">

                <!-- First Box -->
                <div
                    class="flex-1 p-3 bg-[#FAF8F5] rounded-[12px] outline outline-1 outline-[#DEDAD4] flex flex-col justify-start items-start gap-6">
                    <div class="px-[10px] py-[6px] bg-[#F4F0E9] rounded-[6px] flex justify-center items-center gap-[10px]">
                        <div class="text-[#666562] text-[16px] font-inter font-light break-words px-2.5 py-1.5">
                            Donated Breastmilk (DBM)
                        </div>
                    </div>
                    <div class="w-full text-black text-[18px] font-inter font-light break-words flex-grow">
                        Milk that is donated from healthy breastfeeding mothers to help premature or sick infants in need.
                        As supported by the World Health Organisation and UNICEF, DBM should be the first alternative where
                        mother's milk is not available.
                    </div>
                </div>

                <!-- Second Box -->
                <div
                    class="flex-1 p-3 bg-[#FAF8F5] rounded-[12px] outline outline-1 outline-[#DEDAD4] flex flex-col justify-start items-start gap-6 ">
                    <div class="px-[10px] py-[6px] bg-[#F4F0E9] rounded-[6px] flex justify-center items-center gap-[10px]">
                        <div class="text-[#666562] text-[16px] font-inter font-light break-words px-2.5 py-1.5">
                            Mother's Own Milk (MOM)
                        </div>
                    </div>
                    <div class="w-full text-black text-[18px] font-inter font-light break-words flex-grow">
                        Breastmilk provided by the infant's birth mother.
                    </div>
                </div>

            </div>

            <div class="w-full flex flex-col md:flex-row justify-start items-stretch gap-6">

                <!-- First Box -->
                <div
                    class="flex-1 p-3 bg-[#FAF8F5] rounded-[12px] outline outline-1 outline-[#DEDAD4] flex flex-col justify-start items-start gap-6">
                    <div class="px-[10px] py-[6px] bg-[#F4F0E9] rounded-[6px] flex justify-center items-center gap-[10px]">
                        <div class="text-[#666562] text-[16px] font-inter font-light break-words px-2.5 py-1.5">
                            Neo-natal Intensive Care Unit (NNICU)
                        </div>
                    </div>
                    <div class="w-full text-black text-[18px] font-inter font-light break-words flex-grow">
                        An intensive care unit specializing in the care of ill or premature infant newborns. This is where your donated breastmilk will help save lives.
                    </div>
                </div>

                <!-- Second Box -->
                <div
                    class="flex-1 p-3 bg-[#FAF8F5] rounded-[12px] outline outline-1 outline-[#DEDAD4] flex flex-col justify-start items-start gap-6 ">
                    <div class="px-[10px] py-[6px] bg-[#F4F0E9] rounded-[6px] flex justify-center items-center gap-[10px]">
                        <div class="text-[#666562] text-[16px] font-inter font-light break-words px-2.5 py-1.5">
                            Rooming-in
                        </div>
                    </div>
                    <div class="w-full text-black text-[18px] font-inter font-light break-words flex-grow">
                        Placement of an infant with its mother rather than in a nursery after birth. This encourages bonding and helps breastfeeding.
                    </div>
                </div>

            </div>

            <div
                    class="flex-1 p-3 bg-[#FAF8F5] rounded-[12px] outline outline-1 outline-[#DEDAD4] flex flex-col justify-start items-start gap-6 ">
                    <div class="px-[10px] py-[6px] bg-[#F4F0E9] rounded-[6px] flex justify-center items-center gap-[10px]">
                        <div class="text-[#666562] text-[16px] font-inter font-light break-words px-2.5 py-1.5">
                            Necrotising Enterocolitis (NEC)
                        </div>
                    </div>
                    <div class="w-full text-black text-[18px] font-inter font-light break-words flex-grow">
                        A dangerous infection of the intestine, which typically affects premature, formula-fed babies in the third to fourth week of life (source: Medscape.com).
                    </div>
                </div>

                <img src="{{asset('images/baby8.png')}}" class="w-full"/>
        </div>

    </section>

    <section class="py-60 ">
        <div class="wrapper text-control-1 ">

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    Why should women donate breastmilk?</p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class=" font-inter text-[18px] text-[#666562] font-light">To save the lives of the most vulnerable babies. Breastmilk is the perfect first "food". Babies are born with immature immune systems, and breastmilk being rich in antibodies and immune factors helps to "speed" up the development of their immune systems</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    How does it work?
                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class=" font-inter text-[18px] text-[#666562] font-light">
                    The SABR collects frozen breastmilk from suitable donors, which is then tested and pasteurised before being dispatched to NNICUs, in both the public and private sector throughout the country.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    Who receives donated breastmilk?
</p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class=" font-inter text-[18px] text-[#666562] font-light">Premature babies, weighing under 1.8kgs at birth and younger than 14 days of age. Without breastmilk during their first two weeks of life, these babies are vulnerable to infections and diseases due to their very immature immune systems. Under our outpatient programme, we treat every request on a case by case basis after discussion with our Medical Advisory Board, but generally our recipients are babies with severe allergies where breastmilk is a medical necessity or mom needs to interrupt breastfeeding due to medical treatment contraindicated to breastfeeding.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    Who are the safest donors?

                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class=" font-inter text-[18px] text-[#666562] font-light">Breastfeeding women who lead a healthy lifestyle and have excess breastmilk</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                   Who qualifies to become a breastmilk donor?


                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class=" font-inter text-[18px] text-[#666562] font-light">Any healthy, lactating mother who:
                    <ul class=" font-inter text-[18px] text-[#666562] font-light list-disc ml-5">
                        <li>Has not received a blood transfusion in the last 12 months,</li>
                    <li>Does not smoke,</li>
                    <li>Does not regularly consume alcohol,</li>
                    <li>Is not taking any medication.</li>
                    </ul>
                    </p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    Do you randomly test donors?


                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">No, all donors are required to complete a screening questionnaire and undergo the necessary blood tests.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    What tests does the SABR use?



                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">Donor mothers are tested for HIV and hepatitis B and microbiological testing is done on the breastmilk.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                   How often can I donate breastmilk?
                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">As often as what you are able to.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    How much breastmilk must I donate at one time?
                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">There is no minimum requirement, every donation is valued.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    Will I receive payment for my breastmilk?
                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">No, legally we are not allowed to compensate our donor mothers, as breastmilk is considered a human tissue in South Africa. Breastmilk, like blood, is donated as a charitable exercise to save the lives of premature babies and not for financial gain.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    How do I become a breastmilk donor?


                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class=" font-inter text-[18px] text-[#666562] font-light">
                    <ul class=" font-inter text-[18px] text-[#666562] font-light list-disc ml-5">
                        <li>Fill out our online application form</li>
                    <li>The SABR will contact you telephonically to either book an appointment or refer you to your closest sign up facility.</li>
                    <li>Note that this could take 5 - 7 working days</li>
                    </ul>
                    </p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                   
Can I only donate milk I expressed after becoming registered? / Is any breastmilk acceptable as a donation?
                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">No, we will gladly accept any milk that has been stored correctly and is not older than 6 months, provided you pass our screening process.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                   
                    What is safe breastmilk?

                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">Breastmilk from a healthy donor that has been screened / tested, pasteurised and stored correctly could be considered safe.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    What infections can be transmitted by breastmilk?
                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">HIV, hepatitis B, as well as other viral infections can be transmitted by breastmilk, which is why our donors are screened and the milk is tested before use.</p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    Who should not donate breastmilk?

                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class=" font-inter text-[18px] text-[#666562] font-light">Amongst others, women who:
                    <ul class=" font-inter text-[18px] text-[#666562] font-light list-disc ml-5">
                        <li>Smoke</li>
                    <li>Use chronic medications and / or recreational drugs</li>
                    <li>
                        Are at risk of contracting a sexually transmitted disease</li>
                        <li>
                            Are taking medications or herbal remedies to increase their milk supply</li>
                    </ul>
                    </p>
              </div>
            </div>
          </div>

          <div class="faqs-section">
            <div class="faq accordion">
              <div class="question-wrapper">
                  <p class=" font-inter text-[24px] font-bold text-[#107BA2]" title="">
                    How safe is it to donate breastmilk?

                </p>
                     <img src="{{asset('images/down-2.svg')}}" class="material-icons drop  cursor-pointer"/>
              </div>
              <div class="answer-wrapper px-4 pb-6">
                <p class="font-inter text-[18px] text-[#666562] font-light">There is no risk in donating breastmilk.</p>
              </div>
            </div>
          </div>

        </div>
      </section>
@endsection