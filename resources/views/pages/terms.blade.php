@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <div class="container mx-auto">
        <div class="terms__page xl:py-32 md:py-16 py-8">
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('1. Your consent')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Thank you for choosing ZYP.ONE, which includes the Lumiform application.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('This contract (agreement) is between ZYP.ONE GmbH (ZYP.ONE, "us" or "our") and the person or entity agreeing to these terms and conditions (you).  If you agree to this Agreement not as an individual but on behalf of your company, then "you" means your company and you bind your company to this Agreement. ')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('By using or accessing the Service, or by clicking on the "I Agree" button displayed at the time you submit your order (see Section 7 (Account Registration)), you agree to these Terms of Use (Terms).')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If you do not agree to these Terms, do not click on the "I Agree" button and stop using the Service and uninstall it immediately.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('2. Scope of application')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('These terms and conditions govern your use of the Application and any technology that you use from us and that refers to these terms and conditions. These Terms include the Privacy Policy, Acceptable Use Policy, Website Terms, all orders and all other references to ZYP.ONE\'s policies and appendices which are posted from time to time on lumiformapp.com and/or zyp.one (Website) and which contain these policies in these Terms. If any provision of any applicable ZYP.ONE policy conflicts with these Terms, these Terms shall prevail, solely to the extent that these Terms apply to the Service.')
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('3. Free services')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We may provide certain services to you free of charge, including free accounts, trial use, and access to pre-release and beta products (free services). Your use of the Free Services is subject to any additional terms and conditions we may impose and is only permitted for the period of time we specify. We may terminate your right to use the Free Services at any time and for any reason in our sole discretion without liability to you. To the maximum extent permitted by applicable law, we disclaim all obligations or liabilities in relation to the Free Services, including all support and maintenance, warranty and indemnity obligations.')
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('4. Subscription service')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Subject to these Terms and Conditions, ZYP.ONE provides the Service to your designated users (End Users) on a compatible computer, mobile phone or tablet device (Device) owned or controlled by you or our End Users for your internal business operations only. All End Users must create a named account on the ZYP.ONE platform (End User Account). You can request an end user account by : (i) notifying us in writing; or (ii) ordering an End User Account via the Website.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('The terms and conditions of this Agreement shall also apply to all updates and upgrades subsequently made available to you by ZYP.ONE for the Service. ZYP.ONE hosts the Service and may, in its sole discretion and in accordance with this Agreement, update the functionality, user interface, usability and other user documentation, training and education information of the Service and in relation to the Service from time to time as part of its ongoing mission to improve the Service and the use of the Service by its customers.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Except as expressly permitted by law or otherwise in these Terms, you may not (nor may you authorize third parties to) do so: (i) rent, lease, distribute, license, sublicense, sell, transfer, assign, distribute or otherwise grant access to the Service to any third party; (iii) reproduce, modify, adapt, create derivative works from, or adapt the Service; (iv) reverse engineer, disassemble, decompile, transfer, exchange or translate the Service, or otherwise attempt to obtain or derive the source code or API; (iv) remove or tamper with any disclaimer or other legal notice; (v) combine all or any part of the Service with any other software, data or material; (vi) store or use any data not owned by you in an archival or other searchable database. You must notify us immediately in writing of any breach of these Terms of Use.')
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('5. Intellectual property rights')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You agree that all intellectual property of any kind in or relating to the Service, including all code, libraries, programs, software, documentation, content, databases, systems, logos and marks, is owned either directly by us or by our licensors. You are not authorised to use our intellectual property except as expressly permitted in these Terms.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Subject to these Terms, you may modify a template, training course or workflow for a problem in the Service to develop customizations and additional features of a template, training course or workflow for a problem. All such changes shall be deemed to be "your changes. You may use Your modifications only in relation to Your own instances to support Your permitted use of the Service, but You may not distribute Your modifications to any third party. Notwithstanding anything to the contrary in these Terms, ZYP.ONE has no support, warranty, indemnity or other obligation or liability with respect to your modifications or their combination, interaction or use with our Services. You shall indemnify, defend and hold us harmless from and against all claims, costs, damages, losses, liabilities and expenses (including reasonable attorneys\' fees and costs) arising out of or in connection with any claim against us by any third party in relation to Your modifications (including, without limitation, any representations or warranties made by You in relation to Your modifications or the Service) or Your breach of this Section. This indemnification obligation is subject to (i) immediate written notice of any such claim (but in any event in a timely manner to permit you to respond without prejudice); (ii) the exclusive right to control and direct the investigation, defense or settlement of any such claim; and (iii) any reasonably required cooperation from ZYP.ONE at your expense.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We will defend you against any claim made against you by a third party alleging that the Services, when used as authorized under this Agreement, infringe the intellectual property rights of a third party (a "Claim"), and we will indemnify and hold you harmless from and against any damages and costs finally awarded by a court of competent jurisdiction or agreed to by us and arising out of any Claim, provided that we have received notice from you: (a) prompt written notice of the Claim (but in any event, notice in a timely manner so as to enable us to respond notwithstanding); (b) adequate assistance in defending and investigating the Claim, including the provision of a copy of the Claim and all relevant evidence in your possession, custody or control; and (c) the exclusive right to control and direct the investigation, defense and settlement (if any) of the Claim. If your use of a Service is substantially reduced (or in our opinion is likely to be reduced), if a settlement requires it, or if we determine that such action is reasonably necessary to avoid substantial liability, we may act at our discretion and in our sole discretion: (i) obtain a license for your continued use of the Services under this Agreement; (ii) replace a substantially functionally similar Service; or (iii) terminate your right to continue to use the Service and refund any amounts paid in advance for the terminated portion of the Service. Our above indemnification obligations do not apply: (1) if the Service is modified by a party other than us, but only to the extent that the alleged infringement is caused by such modification; (2) if the Service is used in combination with any product, software or equipment not supplied by SaftyCulture, but only to the extent that the alleged infringement is caused by such combination; (3) unauthorized use of the Services; (4) claims arising out of (i) your modifications or (ii) any third party services or components included with the Services; or (5) if you enter into any settlement or admission of a claim without our prior written consent.')
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('6. Data protection')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('This section only applies if and to the extent that the general EU data protection regulation 2016/679 ("GDPR") applies to the data with which you use the Service and/or the Free Services. If this section is applicable, the provisions of Annex 1 (Compliance with Data Protection) and Annex 2 (Data Processing Agreement) shall apply.')
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('7. Account registration')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You may need to register for an account to access the Services. All registration information you provide to us must be accurate, current and complete. You must also update your information so that we can send you notices, statements and other information by email or through your account. You are responsible for all actions taken through your accounts.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('To activate the Service, you must either:')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('complete the online order (Online Order) page on the Site, which contains the following details: (i) the Services to be ordered; (ii) the applicable fees; (iii) the number of paid end user accounts that will be associated with your organization (User Count); (iv) the term of the Agreement (Term); (v) the applicable payment method; and (v) your domain names; or
                    <br>
                    fill out a quotation or order form (Quote/Order Form) provided by ZYP.ONE, which specifies
                    <br>
                    the following items:
                     <br>
                    the services;
                     <br>
                    the number of users;
                     <br>
                    the duration; and
                     <br>
                    the fees.
                    ')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('which are all subject to this agreement.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Unless the Parties agree otherwise in writing, any new seats acquired during a term shall terminate pro rata on the last day of the term.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('8. Duration and extension')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('The Services are provided on a subscription basis for a specific period of time as specified in your order. Unless otherwise specified in your order, all subscriptions will automatically renew for periods equal to your original term (and you will be charged at the then-current rates) unless you cancel your subscription in writing or through your account on the Site. If you cancel your subscription, it will end at the end of the then-current billing cycle, but you will not be entitled to any credits or refunds for amounts accrued or paid prior to cancellation.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If ZYP.ONE does not want the Services to be renewed, ZYP.ONE will notify you in writing. This notification of non-renewal becomes effective at the end of the then current term.')
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('9. Invoicing and payment')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You agree to pay all fees according to your online order or quotation/order form. Unless otherwise stated in your Online Order or Quotation/Order Form, you will pay all amounts in the currency offered (updated from time to time) at the time you submit your Online Order or Quotation/Order Form. All amounts are non-refundable, noncancelable and non-refundable.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('By making payment, you acknowledge that you are not relying on the future availability of the Service beyond the current agreed term or on Service upgrades or functional enhancements. If you add end users during your term, we will bill you for the increased number of end users in your next billing period according to the then-current rates. You agree that we may charge your credit card for renewals, additional end users and unpaid fees, where applicable.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You must select one of the following billing options when you register for and order the Service:')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Monthly Plan: If you choose this option, you will pay for the Services on a monthly basis. We will bill you: (i) Fees are based on the number of end user accounts you use. We will provide you with the monthly rate for the Services when you order the Service and use that rate to calculate your monthly fees.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Annual Plan: If you choose this option, you pay for the Services on an annual basis. We will bill you: (i) Fees based on the number of end user accounts you use. We will provide you with the annual price for the Services when you order the Service and use that rate to calculate your annual fees.
                    <br>
                    Fees for orders where you pay by credit card, debit card, or other non-invoice payment method are due in the month in which you receive the Services. For credit or debit cards, as applicable: (i) we will invoice you for all applicable fees when due and (ii) such fees will be deemed overdue after the end of the month in which you received the Services.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If we issue an invoice for payment in lieu of a direct debit, payment will be due thirty (30) days after the invoice date and will be deemed overdue after that date.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We may allow other forms of payment by making them available on the Website. These other forms of payment may be subject to additional terms and conditions that you may be required to accept before using the additional forms of payment.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Overdue payments may bear interest at one and a half percent per month (or the highest rate permitted by law, if lower) from the due date until full payment is made. You are responsible for all reasonable costs (including legal or collection costs) incurred by us in collecting such overdue amounts, unless such overdue amounts are due to our billing inaccuracies.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You have thirty days to pay any overdue charges. If you do not pay the overdue fees within thirty days, we will automatically suspend your use of the Service. This suspension will continue until you have paid all outstanding fees.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If you have a monthly billing schedule or an annual billing schedule obligation, we will continue to charge you for non-payment during the suspension period and you must pay all outstanding fees in order to resume use of the Services.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If you remain suspended for more than sixty days for non-payment, we may terminate this Agreement.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You will be responsible for any duties, customs duties or taxes (other than our income tax) in connection with the sale of the Services, including any penalties or interest (taxes) associated therewith, and you will pay us for the Services without any tax relief. If we are required to collect or pay taxes, the taxes will be charged to you unless you provide us with a valid tax exemption certificate approved by the appropriate tax authority. If you are required by law to withhold taxes from payments made to us, you must provide us with an official tax receipt or other appropriate documentation to support such payments.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You confirm that the terms of contract with your respective telecommunications network operator (network operator) will continue to apply when you use the Service. As a result, your network operator may charge you for the duration of your connection while you are accessing the Service for access to the network connection services, or charge you for any third party fees that may be incurred. You accept responsibility for any such charges that may be incurred.')
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('10. Your obligations')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You must use the Services in accordance with the Acceptable Use Policy and the Website Terms of Use and all other ZYP.ONE policies posted on the Website.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You may create one or more Administrators who have password protected rights to access the Administrator Account(s) for the purpose of managing the Services (Administrator Account(s)) and managing all End Users who are allowed to use the Services and who have created an End User account. You are responsible for: (a) maintaining the confidentiality of the password and Administrator account(s); (b) designating the persons authorized to access the Administrator account(s); and (c) ensuring that all activities that occur in connection with the Administrator account(s) comply with these Terms. You agree that our responsibility does not extend to the internal management or administration of the Services for you and that we are only a software provider.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Your Administrators may have the ability to access, monitor, use or disclose information available to End Users within End User accounts. You will obtain and maintain all necessary consents from End Users to enable the following: (i) your access, monitoring, use, and disclosure of such information and to enable ZYP.ONE to do so and (ii) ZYP.ONE to provide the Services.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You are responsible for responding to a request from a third party for records of an end user\'s use of the Services (third party requests). Third party requests may be a lawful search warrant, court order, subpoena, other applicable law, or a written consent of the End User allowing disclosure.  To the extent permitted by law and the terms of the third party request, we will disclose the information: (a) notify you promptly upon receipt of a request from a third party; (b) comply with your reasonable requests regarding its efforts to oppose a request from a third party; and (c) provide you with the information or resources necessary to respond to the request from a third party. You will first attempt to obtain the information necessary to respond to a third party\'s inquiry yourself and will only contact us if you cannot reasonably obtain such information.')
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('11. Safety')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('By using the Service, you acknowledge that it is your sole responsibility to ensure the confidentiality and security of any information transmitted from or stored on any device for the purposes of the Service, for all transactions and other activities on behalf of the End User, whether authorized or not. You understand that use of the Service involves the transmission of your information over networks that are not owned, operated or controlled by us, and we are not responsible for the loss, alteration, interception or storage of your information over such networks. We cannot guarantee that our security procedures are error-free, that the transmission of your information will always be secure or that unauthorised third parties will never be able to bypass our security measures or those of our external service providers.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('12. content sharing')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('When you use the Service, any data, templates, information, content, codes, videos, images or other materials of any kind (Materials) you submit will remain confidential to you unless you choose to share Materials with ZYP.ONE and/or other users.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('13. Downloading of materials')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If you download materials, you do so at your own risk and understand that you are downloading content that has not been validated in any way and is not specifically tailored to your needs and that you should not rely on it in any way.  It is your responsibility to modify the Materials to meet your own specific requirements. To customize the materials for your specific use, you should seek professional advice from a qualified person.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('14. Privacy policy')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Any information you provide to us when using the Service will be collected and used by us in accordance with our Privacy Policy (on the Website). We will provide our privacy policy to you and others who download materials. To the extent that we present the Privacy Policy in accordance with the EU General Data Protection Regulation 2016/679 ("GDPR"), we will do so in accordance with Annex 1 (Privacy Compliance).')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('15. Disclaimer, limitation of liability and compensation')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Except as expressly set forth in this Agreement, we make no representations or warranties (whether express or implied) with respect to the services, materials or other goods or services provided to you by ZYP.ONE, including but not limited to any implied warranties of: (i) merchantability; (ii) fitness for a particular purpose; (iii) fitness for a particular performance, trade or business; (iv) non-infringement; or (v) against hidden defects. The materials in the Service are provided "as is", with all faults and "as available" and without further warranty of any kind. We do not warrant that the operation of the Service or the Materials will be uninterrupted or error-free or that all defects will be corrected.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Without limiting the foregoing, you acknowledge this:')
                </p>
                <ul>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('you use the Service at your own risk;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('the Service is not a substitute for professional advice;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('You are solely responsible for your use of the Service and agree that any safety audits, training or incidents conducted while using the Service are only a part of establishing a safe working system, which would typically require additional and comprehensive gap analysis and risk assessments to be conducted along with specific statements regarding safe working practices and safety training; and')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('You have not relied on any representation by us in ordering the Service or the goods and services.')
                    </li>
                </ul>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('To the fullest extent permitted by law, we exclude all liability for any claim, liability, loss or damage of any kind whatsoever (including negligence) arising out of or in connection with the goods or services provided by us, including the Service and its access, use or performance, including without limitation, for which we are not liable: (a) misuse of the Service or the Materials; (b) use of the Service or the Materials with data, software or hardware of third parties which is incompatible with the Service and/or not recommended by us; (c) reduced performance or unavailability of the Service or the Materials due to network connections; or (d) errors in the Service or the Materials resulting from your configuration or tampering with the Service or the Materials, each not expressly advised by us in writing.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Under no circumstances (including, but not limited to, any act or omission on our part) shall we be liable for any loss or damage (including, but not limited to, indirect, incidental, special, consequential or punitive damages or damages for loss of profits) arising out of the use or inability to use the Service or Materials.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('To the fullest extent permitted by law, our liability for breach of any implied warranty or condition which cannot be excluded shall be limited, at our option, to the redelivery of the goods or services ordered by you or payment for their redelivery.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Notwithstanding the foregoing, to the extent permitted by law, our aggregate liability for claims arising out of or relating to these Terms shall in no event exceed the amount paid by you, if any, to us for access to or use of the Service during the twelve (12) months immediately preceding the event giving rise to such liability.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang("You agree to indemnify and hold ZYP.ONE and its related parties, officers, agents, and employees (Indemnified Parties) harmless from and against any and all claims, actions, damages, losses, liabilities, costs, fees, expenses, disbursements, or payments (including legal fees on a full indemnity basis) arising out of or in connection with the same: (i) your use of the Service or Materials; (ii) any breach by you of these Terms; and (iii) any violation of any applicable law by you.")
                </p>

            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('16. Termination and suspension')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('This Agreement shall remain in force for the duration of the Agreement, unless terminated earlier than permitted in these terms and conditions. Either party may terminate this Agreement prior to the expiration of the Term if the other party materially breaches any of these Terms and does not cure the breach within thirty (30) days after written notice of such breach, or if the other party ceases business operations, files for bankruptcy or becomes insolvent or otherwise unable to meet its financial obligations.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We may terminate this Agreement prior to its expiry if you breach these Terms more than twice during the Term, notwithstanding the \'cure\' of such breaches, or if you remain suspended at any time for non-payment of fees for more than sixty days.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You may terminate this Agreement at any time by notifying ZYP.ONE, but you will not be entitled to any credits or refunds as a result of convenient termination for any prepaid but unused services or subscription fees.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Except where an exclusive remedy is set forth in these Terms, the exercise by either party of any remedy, including termination, shall be without prejudice to any other remedy available to it under these Terms, by law or otherwise.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Except as provided in this Section, once the Agreement is terminated, then: (i) the rights and licenses granted to you by ZYP.ONE will immediately cease (except as set forth in this Section); (ii) you (and your end users) must cease all use of the Service and Third Party Materials; (iii) you must pay all outstanding fees to us for the term; (iv) you must immediately cease using the Service and any Third Party Materials provided to you under this Agreement, including any confidential information of ZYP.ONE from your systems (including any third party systems operated on your behalf) and to provide us with written confirmation upon our request that you have done so at our request; and (v) you agree not to attempt to access the Service or any data stored on the Service, in third party materials or on the Website after the date of termination.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Upon termination, ZYP.ONE will provide you with access to the data, including email, provided, generated, transmitted or displayed by you or the End Users through the Services (Customer Data) for a commercially reasonable period of time at our then-current rates for the relevant Services.  After a commercially reasonable period of time, we will delete the Customer Data by removing references to it on our active and replication servers and overwriting it over time.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If we become aware of any breach by you of these terms and conditions, we may expressly request that you block the relevant end-user account. If you do not comply with our request to suspend an account, we may do so. The duration of any suspension by us will be until such time as the relevant End User has remedied the breach that caused the suspension.
                            The following provisions shall survive the termination or expiration of this Agreement: Sections 5 (Intellectual Property Rights), 9 (Invoicing and Payment), 13 (Content Sharing), 15 (Privacy Policy), 16 (Disclaimer, Limitation of Liability and Indemnification), 17 (Termination and Suspension), 20 (General) and any other sections which by reason of intent or meaning shall survive the termination or expiration of this Agreement.
                            Section 19 Amendments
                            <br>
                            We may update or modify these terms and conditions from time to time, including all referenced policies and other documents. If a revision reasonably restricts your rights, we will use reasonable efforts to notify you (for example, by sending an email to the billing or technical contact you specified in the applicable purchase order, by posting it on our website, through your account or within the Service itself). If we change these Terms during the Term, the amended version will be effective at your next renewal of the Term, if applicable. In this event, if you object to the updated Terms, you may elect, as your sole remedy, not to renew, including termination of any Terms that are set for automatic renewal.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('With respect to Toll Free Services, acceptance of the updated Terms is required for you to continue to use the Toll Free Services. You may be required to click through the updated Terms to indicate your acceptance. If you do not agree to the updated Terms after they come into effect, you will no longer have the right to use the Free Services. For the avoidance of doubt, each order is subject to the version of the Terms that is in effect at the time of the order.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('20. general information <br>
                            If any provision of these terms and conditions is found to be invalid, illegal or unenforceable, that provision shall be deemed omitted to the extent that it is invalid, illegal or unenforceable, and the remainder of these terms and conditions shall be construed to best accomplish the original intent of these terms and conditions.
                            ')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('The waiver of any right or failure of any of us to exercise any right provided in these Terms in any respect shall not be deemed a waiver of any such right in the future or a waiver of any right under these Terms.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Neither party shall be liable for any failure to perform to the extent caused by any condition (e.g. natural disaster, acts of war or terrorism, riot, labour conditions, governmental action and internet disruption) beyond the reasonable control of the party (force majeure).')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Your use of any website or software not provided by us to access or download the Service is subject to the terms and conditions applicable to that website or software. We are not responsible for the consequences of any use of such website or software, including but not limited to damage to your property, including your equipment, or transmission of computer viruses or similar malicious code, except to the extent that such consequences are caused by the Service.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('All notices to ZYP.ONE and all questions, concerns or complaints regarding the Service must be made in writing and sent to the following address Investigator, ZYP.ONE GmbH, Torstraße 75, 10119 Berlin - Germany or by e-mail to: <a target="_blank" href = "mailto:legal@lumiformapp.com">legal@lumiformapp.com</a>')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You agree to use your best efforts to resolve any dispute arising out of or in connection with these Terms with us before resorting to any external dispute resolution process. Please notify us in writing of any disputes you may have.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('This Agreement and all rights and licenses granted hereunder may not be transferred or assigned by you without our prior express written consent. We may assign and delegate this Agreement and our rights and obligations without limitation: (i) any of our affiliates or subsidiaries, or (ii) any third party involved in any merger, acquisition, sale of shares or assets, change of control, corporate reorganization or similar transaction involving ZYP.ONE.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('In Bezug auf den Gegenstand der Bedingungen enthalten diese Bedingungen die gesamte Vereinbarung zwischen den Parteien. Alle früheren mündlichen und schriftlichen Mitteilungen, Zusicherungen, Gewährleistungen oder Verpflichtungen werden durch die Bedingungen ersetzt und haben keinen Einfluss auf die Auslegung oder Bedeutung der Bedingungen, und jede der Parteien hat sich vor dem Eingehen der Bedingungen vollständig auf ihre eigenen Untersuchungen verlassen.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Annex 1 (Compliance with data protection)')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('In this Appendix and in Appendix 2 (Data Processing Agreement):')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Data Protection Acts: the EU Data Protection Acts and the laws of other countries and territories which establish and regulate essentially similar concepts and legal principles to those contained in the EU Data Protection Acts in relation to the processing of personal data and sensitive personal data.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('EU Data Protection Acts" means, up to and including 24 May 2018, any legislation in force from time to time implementing EU Directive 95/46/EC and its relevant national implementations and, with effect from 25 May 2018, the GDPR and its relevant national implementations;')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('personal data, sensitive personal data, consent, controller, processor, data subject and processing: the terms, roles and activities defined in the applicable EU data protection laws and, as from 25 May 2018, sensitive personal data are the categories of personal data described in Article 9 of the European General Data Protection Regulation 2016/679 or, where applicable, equivalent terms, roles and activities as described in other data protection laws.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We are the controller of personal data and sensitive personal data, such as account registration data, which we collect directly from users of the Services (end-users) and users of the Free Services and which we use for our business purposes.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You are the \'Controller\' and we are the Processor in respect of all other personal data and sensitive personal data (including as part of Your Modifications) uploaded by End Users and/or Users of the Free Services, including data, templates, information, content, code, video, images or other material of any kind (Materials), or provided by Your Administrators (see Section 10 above).
                    <br>
                    On and after May 25, 2018, to the extent that the Services and/or Free Services involve the processing of personal data or sensitive personal data, where we are the Processor and you are the Controller and the processing of personal data or sensitive personal data is subject to the GDPR:')
                </p>

                <ul>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('You will comply with the requirements of the GDPR, as you are the controller of the personal data or sensitive personal data; and')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('the provisions of Appendix 2 (Data Processing Agreement) to these Conditions shall apply')
                    </li>
                </ul>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We will provide our privacy policy to you and others who may download materials where we are a taxpayer. Where we do not have direct contact with end-users or the data subjects, for example where personal data or sensitive personal data about your employees or customers is uploaded, and where we are a processor and not the controller, it is your responsibility to ensure this is done in accordance with Article 13 of the GDPR:')
                </p>
                <ul>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('there is a legal basis for the collection and processing of personal data and/or sensitive personal data; and')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('You will present our privacy policy to these end users and other data subjects as required')
                    </li>
                </ul>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Annex 2 (Data-processing agreement)')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('The provisions of this Annex (Data Processing Agreement) form an integral part of the Agreement, insofar as Section 6 of the Agreement applies.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('ZYP.ONE will:')
                </p>

                <ul>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('process personal data only on documented instructions from the controller, including with regard to the transfer of personal data to a third country or international organisation, unless required to do so by the European Union or by the national law of an EU Member State to which the processor is subject, in which case the processor shall inform the controller of this legal requirement prior to processing, unless the law prohibits such information for important reasons of public interest;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('ensure that the persons authorised to process personal data have undertaken to respect confidentiality or are subject to an equivalent legal obligation of confidentiality;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('implement appropriate organisational and technical measures in accordance with Article 32 (security of processing) of the EU General Data Protection Regulation 2016/679. The measures that we consider appropriate are described in more detail in ZYP.ONE\'s document "Architecture and Security" (a copy of which is available on request). This document provides an overview:')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('our architecture and infrastructure through which services and toll-free services are provided')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('the security controls used by us and our service providers to protect personal and/or sensitive personal information; and')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('Security controls used by our support channels that process personal information or sensitive personal data.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('to comply with the conditions for hiring another processor in accordance with Article 28 paragraphs 2 and 4 (Processors) of the EU General Data Protection Regulation 2016/679;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('support the controller, taking into account the nature of the processing, by appropriate technical and organisational measures, to the extent possible, in order to enable him/her to fulfil his/her obligation to respond to requests to exercise the data subject\'s rights as laid down in Chapter III of the EU General Data Protection Regulation 2016/679;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('assist the controller in fulfilling the obligations laid down in Articles 32 to 36 of the EU General Data Protection Regulation 2016/679, taking into account the nature of the processing and the information available to the processor;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('at the choice of the controller, to erase all personal data or, at the end of the provision of services related to the processing, to return the data to the controller and delete existing copies, unless EU law or the national law of an EU Member State or any other applicable law, including the law of an Australian state or the Commonwealth, to which the processor is subject requires the retention of personal data;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('provide the controller with all information necessary to demonstrate compliance with the obligations laid down in Article 28 (processors) of the EU 2016/679 General Data Protection Regulation and allow and contribute to audits, including inspections, by the controller or another auditor appointed by the controller (in each case at the expense of the controller).')
                    </li>
                </ul>
            </section>
        </div>
    </div>
@endsection