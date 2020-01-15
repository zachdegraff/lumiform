@extends('layout/base')

@section("head.title", __(""))

@section("content")
    <div class="container mx-auto">
        <div class="terms__page xl:py-32 md:py-16 py-8">

            <section class="mb-10">

                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('There are many different ways in which you can use our services to exchange information, communicate with other people or create new content.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If you share information with us, for example by creating an account with us, we can make these services even better - to help you connect with other people or to make sharing with others faster and easier. When you use our services, we want you to be aware of how we use information and how you can protect your privacy.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('To the extent that our processing of your data is covered by the General Data Protection Regulation 2016/679 ("GDPR"), the sections of this Privacy Policy in Appendix 1 - Your Rights - apply to you.')
                </p>
                <p class="text-30 font-bold font-din text-primary">
                    @lang('Our Privacy Policy explains:')
                </p>
                <ul class="mb-8">
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('What information we collect and why we collect it.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('How we use this information.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('The choices we offer, including accessing and updating information.')
                    </li>
                </ul>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We have tried to keep it as simple as possible, but if you are unfamiliar with terms such as cookies, IP addresses and browsers, please read these keywords first. Your privacy is important to us; please take the time to learn about our practices - and if you have any questions, please contact us.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Transparency and selection')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Our goal is to make it clear what information we collect so that you can make informed choices about how the information is used and control with whom you share it. By providing us with personal information, you consent to our collection, storage, use and disclosure of your personal information in accordance with this Privacy Policy. You do not have to provide us with any personal information, but if you do not, it may affect your use of this website or the products and/or services offered on or through it.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You can also set your browser to block or indicate all cookies, including those associated with our services, when a cookie is set by us. However, it is important to remember that many of our services may not function properly if your cookies are disabled. For example, you may not be able to log in to ZYP.ONE or use other services.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Information collected by us')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We collect information in order to provide better services to all our users - from simple things like what language you speak to more complex things like what content of ours is most important to you.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We collect information in the following ways:')
                </p>
                <ul class="mb-8">
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('<span class="font-bold text-primary">Information you give us.</span> We collect information about you and your business when you register for an account with us, create or change your profile, use, access or interact with our services or our websites (including but not limited to uploading, downloading, collaborating or sharing content, including photos and videos). For example, many of our services require you to register for an account with us. When you do, we ask for personal information such as your name, email address, phone number, or credit card. We may associate your name, email address or image with other users in your organization or otherwise with your account to assist you in sharing or referring you.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        @lang('<span class="font-bold text-primary">Information that we obtain through your use of our services.</span> We may collect information about the services you use and how you use them, for example, when you visit a website that uses our services or when you view and interact with our content. This information includes:')
                        <ul class="secondary-list">
                            <li>
                                @lang('Device Information - We may collect device-specific information (such as your hardware model, operating system version, unique device identifiers and mobile network information including your telephone number). We may associate your device IDs or phone number with your account.')
                            </li>
                            <li>
                                @lang('Log Information - When you use our services or view content provided by us, we may automatically collect certain information and store it in server logs. This may include:')
                                <ul>
                                    <li class="text-30 font-light font-din text-secondary">
                                        @lang('Details of how you have used our service, such as your search queries;')
                                    </li>
                                    <li class="text-30 font-light font-din text-secondary">
                                        @lang('Telephony log information such as your telephone number, caller ID, call forwarding numbers, time and date of calls, duration of calls, SMS routing information and call types;')
                                    </li>
                                    <li class="text-30 font-light font-din text-secondary">
                                        @lang('Internet Protocol address;')
                                    </li>
                                    <li class="text-30 font-light font-din text-secondary">
                                        @lang('device event information such as crashes, system activity, hardware settings, browser type, browser language, date and time of your request and referral URL; and')
                                    </li>
                                    <li class="text-30 font-light font-din text-secondary">
                                        @lang('Cookies that can uniquely identify your browser or account.')
                                    </li>
                                </ul>
                            </li>
                            <li class="text-30 font-light font-din text-secondary">
                                @lang('Location Information - When you use a location-based ZYP.ONE service, we may collect and process information about your actual location, such as GPS signals sent from a mobile device. We may also use various technologies to determine your location, such as sensor data from your device, which may provide information about nearby Wi-Fi access points and cell phone towers, for example.')
                            </li>
                            <li class="text-30 font-light font-din text-secondary">
                                @lang('Location Information - If you use a ZYP.ONE location-based service, we may collect and process information about your actual location, such as GPS signals sent from a mobile device. We may also use various technologies to determine your location, such as sensor data from your device, which may provide information about nearby Wi-Fi access points and cell phone towers, for example.')
                            </li>
                            <li class="text-30 font-light font-din text-secondary">
                                @lang('Unique application numbers - Certain services include a unique application number. This number and information about your installation (such as the type of operating system and version number of the application) may be sent to us when you install or uninstall this service, or if this service regularly contacts our servers, for example, for automatic updates.')
                            </li>
                            <li class="text-30 font-light font-din text-secondary">
                                @lang('Local Storage - We may collect and store information (including personal data) locally on your device using mechanisms such as browser web storage (including HTML 5) and application data caches.')
                            </li>
                            <li class="text-30 font-light font-din text-secondary">
                                @lang('Cookies and anonymous identifiers - We use various technologies to collect and store information when you visit our services, and this may involve sending one or more cookies or anonymous identifiers to your device. We also use cookies and anonymous identifiers when you interact with services we offer to our partners, such as advertising services or ZYP.ONE features that may appear on other websites.')
                            </li>
                        </ul>
                    </li>

                </ul>
            </section>
            <section class="mb-10">
                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('How we use the information we collect')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We may use the information we collect, including your Personal Information and Transaction Data, from any of our services at one or more of the locations where ZYP.ONE operates or otherwise conducts business (currently our location in Germany, Berlin) for the following purposes:')
                </p>


                <ul class="mb-8">
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('for internal and service-related purposes, such as providing, maintaining, protecting, improving and personalizing our services, developing new services and protecting the rights, property or safety of ZYP.ONE and our users;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to communicate with you to provide you with information that we believe may be useful or relevant to you;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to promote our services and related services;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to analyse information in order to offer aggregated, anonymised data products to third parties;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to facilitate the exchange of aggregated and anonymised information with third parties, including transactional data. An example of anonymized information would be the number of uses of a template or location data that may be used by such third parties to inform judgments about the organization using the software, but not about individuals whose data is processed by the software;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to enforce the privacy policy and our terms and conditions for the use of our services and websites;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to monitor and analyze trends, usage and activities related to our services and for marketing or advertising purposes or to provide you with customized content;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to investigate and prevent fraudulent transactions, unauthorised access to or use of our services and other illegal or unusual activities;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to use the name you provide for your ZYP.ONE profile in any services we offer that require a ZYP.ONE account. In addition, we may replace previous names associated with your ZYP.ONE account so that you are consistently represented in all our services. If other users already have your email or other information that identifies you, we may show them your publicly visible ZYP.ONE profile information, such as your name and photo;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('if you contact us to record your communication so that we can help you resolve any problems you may have. We may use your email address to inform you about our services, for example, to notify you of upcoming changes or improvements;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('cookies and other technologies to improve your user experience and the overall quality of our services;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to integrate information from one service, including personal information, into other ZYP.ONE services - for example, to make it easier to share things with people you know;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('as otherwise stated in this Privacy Policy.')
                    </li>
                </ul>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('To use the information we collect, we may need our systems to access, screen, store, film and/or scan your information. Where appropriate or required by data protection laws, we will ask for your consent before using information for any purpose other than those set out in this Privacy Policy.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Retention of personal data')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We will retain your personal information for as long as necessary to provide the services we provide to you or for other purposes described in this Privacy Policy, and you may at any time request that we stop processing your personal information or delete it.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We are required by law to retain some of your data for certain periods of time. If we no longer need your data, we will ensure that your data is destroyed or de-identified.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We may need to retain certain personal information after the discontinuation of the provision of products or services in order to enforce our terms and conditions, prevent fraud, identify, issue or resolve legal claims and/or maintain proper accounting records.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Disclosure of personal information')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('ZYP.ONE processes personal information on our servers in many countries around the world. If you choose, we will process your personal information on a server within your country of residence. Please inform us about this wish immediately upon conclusion of the contract.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We may share personal information outside of Germany with third parties, as listed in Appendix 2 - Third Party Service Providers.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('By providing us with your personal information, you consent to the transfer of your personal information to third parties living outside Germany. When we share your personal information with third parties, we will take reasonable steps to ensure that any recipient outside Germany handles such information in a manner consistent with German and European data protection principles.')
                </p>
            </section>
            <section class="mb-10">
                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Information we share')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We do not share personal information with companies, organizations and individuals outside of ZYP.ONE unless one of the following circumstances applies:')
                </p>


                <ul>
                    <li class="text-30 font-light font-din text-secondary">
                        <p class="text-30 font-bold font-din text-primary">@lang('With your consent')</p>
                        @lang('We may share personal information with companies, organizations or individuals outside of ZYP.ONE if we have your consent.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary">
                        <p class="text-30 font-bold font-din text-primary">@lang('With account administrators')</p>
                        @lang('If your account is managed for you by an organization administrator, your organization\'s administrator and the resellers who provide user support for your organization will have access to your information (including your email and other data).')
                        <ul>
                            <li>@lang('Your account administrator may be able to do this:')</li>
                            <li>@lang('View statistics about your account;')</li>
                            <li>@lang('change your account password;')</li>
                            <li>@lang('suspend or terminate your account access;')</li>
                            <li>@lang('access or retain information stored as part of your account;')</li>
                            <li>@lang('obtain your account information to comply with any applicable law, regulation, legal process or enforceable governmental request;')</li>
                            <li>@lang('limit your ability to delete or edit information.')</li>
                        </ul>
                    </li>
                </ul>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('For more information, see the privacy policy of your account administrator.')
                </p>
            </section>
            <section class="mb-10">
                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Information we share')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We do not share personal information with companies, organizations and individuals outside of ZYP.ONE unless one of the following circumstances applies:')
                </p>


                <ul>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        <p class="text-30 font-bold font-din text-primary">@lang('With third-party service providers')</p>
                        @lang('We may share personal information:')
                        <ul>
                            <li>@lang('Third party service providers to enable them to provide their services, including (without limitation) IT service providers, data storage providers, web hosting and server providers, collection companies, maintenance or problem solving providers, marketing or advertising providers and payment system operators;')</li>
                            <li>@lang('our existing or potential agents or business partners;')</li>
                            <li>@lang('third parties, including agents or subcontractors, who assist us in providing information, products, services or direct marketing to you.')</li>
                        </ul>
                        @lang('Our current third-party service providers (as updated from time to time) are listed in Appendix 2.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        <p class="text-30 font-bold font-din text-primary">@lang('To address fraud, security or technical issues')</p>
                        @lang('We will disclose your personal information to trusted third parties when necessary to detect, prevent or otherwise address fraud, security or technical issues.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        <p class="text-30 font-bold font-din text-primary">@lang('For legal reasons')</p>
                        @lang('We may disclose your information if required to do so by applicable law, regulation or as part of any actual or anticipated legal process (including when reasonably necessary to enforce applicable terms of use or to establish, exercise or defend our legal rights). If we receive a request from a regulatory or law enforcement agency and if permitted by GDPR, the CCPA and other laws, we may disclose certain information to such agencies or authorities.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        <p class="text-30 font-bold font-din text-primary">@lang('Merger or acquisition')</p>
                        @lang('If we merge with or are acquired by another company, we may share your personal information with the new owners of the company and their advisors. We will continue to ensure the confidentiality of all personal information and notify affected users (for example, by sending a message to the email address associated with your account) before personal information is transferred or becomes subject to another privacy policy.')
                    </li>
                </ul>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We may share aggregated, non-personally identifiable information publicly and with our partners, such as publishers, advertisers, or affiliated websites. For example, we may make information publicly available to show trends in the general use of our services. This may include government agencies, industry groups, insurance companies and educational/training institutions.')
                </p>
            </section>
            <section class="mb-10">
                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Information Security')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We have implemented robust measures regarding the security of the information we collect and store about you (including through the use of network and database security measures) and will use reasonable efforts to protect your personal information from unauthorized access or unauthorized alteration, disclosure or destruction. In particular:')
                </p>

                <ul>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('We encrypt many of our services with Secure Sockets Layer (SSL) or Transport Layer Security (TLS).')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('We review our information collection, storage and processing practices, including physical security measures, to protect against unauthorized access to systems.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('We restrict access to personal information to our employees, contractors and agents who need to know that information to process it for us and who are under strict contractual confidentiality obligations and may be disciplined or terminated if they fail to comply with these obligations.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('We have several authentication and access control measures in place to ensure that only authorized personnel can access the information.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('We enforce strong encryption of all data at rest using the Advanced Encryption Standard (AES-256).')
                    </li>
                </ul>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('The transmission of information over the Internet is not completely secure. Although we do our best to protect your personal information, we cannot guarantee the security of your information transmitted to our servers over third-party networks; any transmission is at your own risk. Once we have received your information, we will use strict procedures and security features to prevent unauthorized access.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Registration')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Our Privacy Policy applies to all services offered by ZYP.ONE and its partners, including services offered on other websites, but excludes services that have separate privacy policies that do not include this Privacy Policy.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Our Privacy Policy does not apply to services offered by other companies or individuals, including products or websites that appear in search results, websites that may contain ZYP.ONE services, or other websites that are linked to our services. Our privacy policy does not cover the information practices of other companies and organizations that advertise our services.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Enforcement')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We regularly check the compliance with our data protection regulations. We also adhere to various self-regulatory frameworks. When we receive formal written complaints, we contact the person who made the complaint to investigate it. We work with the relevant regulatory authorities, including local data protection authorities, to resolve complaints regarding the transfer of personal information that we cannot resolve directly with our users.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Restriction')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You may choose to limit the collection or use of your personal information. If you have previously agreed to the use of your personal information for direct marketing purposes, you can change your mind at any time by contacting us using the information below.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Access')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You can request details of the personal information we hold about you. There may be an administration fee for providing this information. In certain circumstances, as set out in the Privacy Act 1988 (Cth), we may refuse to provide you with personal information we hold about you.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Correction')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If you believe that any information we hold about you is inaccurate, out of date, incomplete, irrelevant or misleading, please contact us using the details below. We will take reasonable steps to correct any information that is found to be inaccurate, incomplete, misleading or out of date.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Complaints')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If you believe that we have violated the German Federal Data Protection Act (BDSG) and wish to make a complaint, please contact us using the details below and provide us with full details of the alleged violation. We will investigate your complaint immediately and reply to you in writing, outlining the outcome of our investigation and the steps we will take to deal with your complaint.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Other Websites')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Please note that by clicking on links and banner ads on our websites, your browser may access a third party website that has a different privacy policy than ZYP.ONE.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We are not responsible for and have no control over the information transmitted to or collected by these third parties and you should consult their privacy policies.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Changes')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We may revise this privacy policy from time to time and will post the most current version on our website. If a revision reasonably restricts your rights or involves a material change in the way we process your personal information, we will notify you. ')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Contact')
                </h2>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If you have any questions or if you would like to contact us about the processing of your personal data, please contact us in one of the ways listed below. When you contact us, we will ask you to verify your identity. ')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Contact name: Data protection officer')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('E-Mail: <a target="_blank" href = "mailto:privacy@lumiformapp.com">privacy@lumiformapp.com</a>')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Mail:
                    <br>
                    ZYP.ONE GmbH
                    <br>
                    The Data Protection Officer
                    <br>
                    Torstrasse 75
                    <br>
                    10405 Berlin - Germany')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('Annex 1 - Your rights')
                </h2>
                <h3 class="text-38 font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none">
                    @lang('BIPR')
                </h3>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('For the purposes of this Privacy Policy, the owner of the Personal Information is ZYP.ONE GmbH or one of its subsidiaries ("ZYP.ONE") and our contact details are listed in the Contact Us section above.')
                </p>

                <h5 class="font-cocogoose font-black uppercase  tracking-normal text-primary lg:mb-8 mb-8 leading-none"
                    style="color: #434343;">
                    @lang('The legal basis for processing your information')
                </h5>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('In accordance with the GDPR, the main reasons on which we rely when processing personal data collected through our websites and services are the following:')
                </p>
                <ul class="mb-8">
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('Necessary for the conclusion or execution of a contract - in order to fulfil the obligations we enter into when providing a service to you, or to conclude a contract with us at your request, it is necessary for us to process your personal data;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('to fulfil a legal obligation - we are subject to certain legal requirements which may oblige us to process your personal data. We may also be required by law to disclose your personal data to a regulatory authority or law enforcement agency;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('necessary to protect legitimate interests - either we or a third party must process your personal data for the purposes of our (or the legitimate) interests of third parties, provided that we have established that these interests are not overridden by your rights and freedoms, including your right to protection of your personal data. Our legitimate interests include responding to inquiries and requests from you or third parties, improving our website, applications and customer experience, informing you about our products and services, and ensuring that our operations are conducted in a fair and efficient manner;')
                    </li>
                    <li class="text-30 font-light font-din text-secondary mb-8">
                        @lang('Consent - we may ask for your consent to process your personal data in a specific way.')
                    </li>
                </ul>
                <h5 class="font-cocogoose font-black uppercase  tracking-normal text-primary  mb-8 leading-none"
                    style="color: #434343;">
                    @lang('Third-party service provider')
                </h5>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('As mentioned above, we will share your personal information with trusted third parties when we have contracted them to provide services that you or our customers have requested, and to perform maintenance work or respond to technical incidents that affect our services. Our current third party providers are listed in Appendix 2.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('When we share personal information with third parties, we require these third parties to meet minimum standards of confidentiality and data protection.')
                </p>
                <h5 class="font-cocogoose font-black uppercase  tracking-normal text-primary  mb-8 leading-none"
                    style="color: #434343;">
                    @lang('Processing outside the European Economic Area (\'EEA\')')
                </h5>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Where personal information is transferred to third parties outside the EEA or who will access the information from outside the EEA, we will ensure that approved safeguards are in place to ensure that we comply with GDPR, such as the standard contractual clauses approved by the European Commission or the EU/US Privacy Shield.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('ZYP.ONE processes personal data on our servers in many countries around the world. We may process your personal data on a server located outside the country where you live, including outside the EEA. The primary storage location for user data and data uploaded to our products is a data center in Germany, operated by our third party cloud hosting provider, Amazon Web Services ("AWS"). AWS is a participant in the EU/US Privacy Shield, under which transfers of personal data to the United States are authorized.')
                </p>
                <h5 class="font-cocogoose font-black uppercase  tracking-normal text-primary  mb-8 leading-none"
                    style="color: #434343;">
                    @lang('Retention of personal data')
                </h5>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We will retain your personal information for as long as necessary to provide the services we provide to you or for other purposes described in this Privacy Policy, and you may at any time request that we stop processing your personal information or delete it (see the section below regarding your rights).')
                </p>
                <h5 class="font-cocogoose font-black uppercase  tracking-normal text-primary  mb-8 leading-none"
                    style="color: #434343;">
                    @lang('Your rights in relation to the information we hold about you')
                </h5>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You have certain rights in relation to personal information that we hold about you. Details of these rights and how to exercise them are set out below. We require proof of your identity before we can respond to your request.')
                </p>

                <p class="text-30 font-bold font-din text-primary">@lang('Right of access')</p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You have the right at any time to ask us for a copy of the personal data stored with us. If we have good reason and if the GDPR permits, we may refuse your request for a copy of your personal data or certain elements of the request. If we refuse your request or any part of it, we will inform you of our reasons for doing so.')
                </p>

                <p class="text-30 font-bold font-din text-primary">@lang('Right of rectification or completion')</p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If the personal information we hold about you is incorrect, out of date or incomplete, you have the right to have the information corrected, updated or completed. You can let us know by contacting us at <a target="_blank" href = "mailto:privacy@lumiformapp.com">privacy@lumiformapp.com.</a>')
                </p>

                <p class="text-30 font-bold font-din text-primary">@lang('Right of cancellation')</p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Under certain circumstances, you have the right to request the deletion of your personal data stored with us, e.g. if the data are no longer necessary for the purposes for which they were collected or processed or if our processing of the data is based on your consent and there are no other legal reasons justifying the processing of the data.')
                </p>

                <p class="text-30 font-bold font-din text-primary">@lang('Right of opposition or restriction of processing')</p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Under certain circumstances, you have the right to object to the processing of your personal data by us by contacting us at <a target="_blank" href = "mailto:privacy@lumiformapp.com">privacy@lumiformapp.com</a> For example, if we process your data on the basis of our legitimate interests and there are no compelling legitimate reasons for our processing that outweigh your rights and interests. You also have the right to object to the use of your personal data for direct marketing purposes.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You may also have the right to limit the use of your personal data by us, for example in cases where you have questioned the accuracy of the data and during the period in which we verify the accuracy of the data.')
                </p>

                <p class="text-30 font-bold font-din text-primary">@lang('Right to transferability of data')</p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('In certain cases, you have the right to receive all personal information we hold about you in a structured, commonly used and machine-readable format. You may ask us to transfer this information to you or directly to a third party organisation.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('The above right exists only in respect of personal information that:')
                </p>
                <ul class="mb-8">
                    <li class="text-30 font-light font-din text-secondary ">
                        @lang('which you have previously provided to us; and')
                    </li>
                    <li class="text-30 font-light font-din text-secondary ">
                        @lang('is automatically processed by us.')
                    </li>
                </ul>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('We welcome such requests, but cannot guarantee technical compatibility with third-party systems. We are also unable to fulfill requests relating to the personal data of other persons without their consent.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('You can exercise any of the above rights by contacting us through any of the methods listed in the Contact Us section above.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Most of the above rights are subject to restrictions and exceptions. We will give reasons if we are unable to comply with a request to exercise your rights.')
                </p>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('If we process your personal data on the basis of your consent, you have the right to withdraw your consent at any time. You can do so by contacting us using the details in the "Contact" section above.')
                </p>

                <h5 class="font-cocogoose font-black uppercase  tracking-normal text-primary  mb-8 leading-none"
                    style="color: #434343;">
                    @lang('Automated decision-making')
                </h5>
                <p class="text-30 font-light font-din text-secondary mb-8">
                    @lang('Automated decision making occurs when an electronic system uses personal information to make a decision without human intervention. It is specifically regulated in the GDPR when such decisions are made that have legal or other significant effects on the individual. It is permissible in the following circumstances:')
                </p>
                <ul class="mb-8">
                    <li class="text-30 font-light font-din text-secondary ">
                        @lang('If it is necessary to conclude or fulfil our contract with you and appropriate measures are taken to protect your rights.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary ">
                        @lang('In limited circumstances, with your express written consent and where appropriate measures are in place to protect your rights.')
                    </li>
                    <li class="text-30 font-light font-din text-secondary ">
                        @lang('You will not be the subject of any decision which, solely by virtue of the automated processing, will have a material impact on you, unless we have a legitimate basis for doing so, we have notified you and given you the right to challenge the decision or demand that the decision be taken by a person.')
                    </li>
                </ul>

                <h5 class="font-cocogoose font-black uppercase  tracking-normal text-primary  mb-8 leading-none"
                    style="color: #434343;">
                    @lang('Complaints')
                </h5>
                <p class="text-30 font-light font-din text-secondary mb-12">
                    @lang('If you do not consent to our use of your personal information, you can contact us using the information in the "Contact Us" section below.')
                </p>
            </section>
            <section class="mb-10">

                <h2 class="text-50 font-cocogoose font-black uppercase  tracking-normal text-primary  mb-4 leading-none">
                    @lang('Annex 2 - Third party service providers')
                </h2>
            </section>
            <section>
                <div class="provider__table">
                    <table>
                        <tr>
                            <th>@lang('Third party service provider ')</th>
                            <th>@lang('Purpose')</th>
                            <th>@lang('Country')</th>
                        </tr>
                        <tr>
                            <td>@lang('Atlassian')</td>
                            <td>@lang('Ticketing system and page for team collaboration')</td>
                            <td>@lang('USA')</td>
                        </tr>
                        <tr>
                            <td>@lang('AWS Amazon')</td>
                            <td>@lang('Data hosting')</td>
                            <td>@lang('Germany')</td>
                        </tr>
                        <tr>
                            <td>@lang('Fullstory')</td>
                            <td>@lang('User experience research')</td>
                            <td>@lang('USA')</td>
                        </tr>
                        <tr>
                            <td>@lang('Google Cloud, G-Suite')</td>
                            <td>@lang('Document management, e-mail, analytics')</td>
                            <td>@lang('USA')</td>
                        </tr>
                        <tr>
                            <td>@lang('Hubspot')</td>
                            <td>@lang('Customer Relationship Management')</td>
                            <td>@lang('USA')</td>
                        </tr>
                        <tr>
                            <td>@lang('Intercom')</td>
                            <td>@lang('Customer support system')</td>
                            <td>@lang('USA')</td>
                        </tr>
                        <tr>
                            <td>@lang('Sendgrid')</td>
                            <td>@lang('E-mail service provider')</td>
                            <td>@lang('USA')</td>
                        </tr>
                        <tr>
                            <td>@lang('Slack')</td>
                            <td>@lang('Internal communication tool')</td>
                            <td>@lang('USA')</td>
                        </tr>
                        <tr>
                            <td>@lang('Stripe')</td>
                            <td>@lang('Payment processing')</td>
                            <td>@lang('USA')</td>
                        </tr>
                    </table>


                </div>
            </section>
        </div>
    </div>
@endsection
