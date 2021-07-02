@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-20 py-10 md:py-12  border-b border-gray-800">
    <div class="flex flex-col-reverse mb-10 lg:flex-row">
        <div class="mt-8">
            <h1 class="text-5xl lg:text-8xl pb-20">Begin your Bitclout journey today...</h1>

            <div class="pb-10 text-xl" style="columns: 300px 2;">
                BitClout is a new type of social network that mixes speculation and social media, and it’s built from the ground up as its own custom blockchain. Its architecture is similar to Bitcoin, only it can support complex social network data like posts, profiles, follows, speculation features, and much more at significantly higher throughput and scale. Like Bitcoin, BitClout is a fully open-source project and there is no company behind it-- it’s just coins and code.                
            </div>
        </div>
    </div>
</section>

<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row">
        <div class="ml-64 mt-8">
            
            <div class="border-b border-gray-800">
                <h2>Signing Up</h2>
            </div>

            <div class="mt-6">
                <div class="rounded-lg border p-6">
                    <div class="font-bold text-3xl text-gray-600 opacity-50">
                        Step One
                    </div>
                    <h3 class="mt-0">
                        Create an account
                    </h3>

                    <p>
                        Go to the original BitClout website and select one of the options below:
                    </p>

                    <ol class="ml-6">
                        <li>
                            Signup with Google authentication
                        </li>
                        <li>
                            Traditional  “seed phrase” method. This sequence of words will serve as your password. Write it down, keep it in a safe place, and DO NOT share it with anyone.                            

                        </li>
                    </ol>

                    <p>
                        <a href="https://bitclout.com" title="BitClout.com" 
                            class="inline-block items-center text-sm shadow hover:bg-gray-200 text-black rounded py-2 px-6"
                            >
                            <span class="flex items-center">
                                BitClout.com 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </span>
                        </a>
                    </p>

                </div>
                <div class="mt-6">

                    <div class="rounded-lg border p-6">
                        <div class="font-bold text-3xl text-gray-600 opacity-50">
                            Step Two
                        </div>
                        <h3 class="mt-0">
                            Receive starter $CLOUT from JoinBitclout.
                        </h3>
    
                        <p>JoinBitClout has partnered with @giftclout to gift you $11.11 USD in $BitClout upon signup to help get you started</p>

                        <p>
                            <a href="https://joinbitclout.com" title="JoinBitClout" 
                                class="inline-block items-center text-sm shadow hover:bg-gray-200 text-black rounded py-2 px-6"
                                >
                                <span class="flex items-center">
                                    JoinBitClout.com
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </span>
                            </a>
                        </p>
    
                    </div>
                </div>
            </div>
        </div>

        {{-- <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 "> --}}
    </div>
</section>

<div class="bg-black text-white">
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row">
        <div class="ml-64 mt-8">

            <div class="mt-8">
                <h2 class="text-3xl text-white border-b border-white pb-6">How To Use BitClout</h2>
    
                <div class="mt-10 pb-10 text-lg" style="columns: 300px 2;">
                    <p class="mt-0">The functionality should be similar to other social media with these two additions:</p>
        
                    <p>Creator Coins - A coin associated with every profile that can be bought and sold to support creators. The owner of the profile receives a percentage of all purchases in $BitClout($BCLT) - this is called the Founder Reward and is set by the user. </p>
        
                    <p>Diamonds - This is a way to tip/gift your coin to another user for a post that you like.</p>
                </div>
    
            </div>
            
            <div class="mt-20">
                <h2 class="text-3xl text-white border-b border-white pb-6">Discover Creators</h2>
    
                <div class="mt-10 text-lg" style="columns: 300px 2;">

                    <p class="mt-0">The first place to find creators, both individuals and projects, is on the right side of the BitClout.com UI when using the desktop browser or under “Buy Creator Coins” from the nav when using the mobile browser. <br />&nbsp;<br /></p>
        
                    <p>Then next best place(and better for topics) is: 
                        <a class="flex items-center text-indigo-600" href="https://bitcloutfollow.com">BitCloutFollow
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </p>
        
                </div>
    
                    <p class="mt-0">
                        <a class=" flex bg-gray-700 p-3 rounded-xl" href="https://bitcloutfollow.com">
                            <img class=" rounded-xl" src="/assets/img/bitcloutfollow.png" alt="">
                        </a>
                    </p>
                
            </div>

            <div class="mt-20">
                <h2 class="text-3xl text-white border-b border-white pb-6">Mobile Apps</h2>
    
                <div class="grid md:grid-cols-2 gap-6 mt-6">
                    <div>
                        <h4 class="text-white">FlickApp</h4>
                        <p class="mt-0 text-white font-normal">
                            The premium mobile client to access the decentralized social media revolution.                            
                        </p>
                        <div>
                            <img src="/assets/img/flick.png" alt="">
                        </div>

                        <div class="mt-10">
                            <a class=" shadow rounded-lg text-center font-normal py-3 block bg-white text-black" href="https://bitclout.com/u/flickapp">
                                <span class="flex items-center justify-center">
                                Download
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>                                
                                </span>
                            </a>
                        </div>

                    </div>
                    <div>
                        <h4 class="text-white">CloutFeed</h4>
                        <p class="mt-0 text-white font-normal">
                            The first decentralized social network mobile app based on BitClout.
                        </p>
                        <div>
                            <img src="/assets/img/cloutfeed.png" alt="">
                        </div>

                        <div class="mt-10">
                            <a class=" shadow rounded-lg text-center font-normal py-3 block bg-white text-black" href="https://bitclout.com/u/cloutfeed">
                                <span class="flex items-center justify-center">
                                Download
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>                                
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
    
                {{-- <div>
                    <p><a href="https://bitclout.com/u/cloutieapp">Cloutie</a>: Coming soon!</p>
                </div> --}}
            </div>

        </div>
    </div>
</section>
</div>

<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row">
        <div class="ml-64 mt-8">
            
            <div class="border-b border-gray-800">
                <h2>Learn more</h2>
            </div>

            <div class="mt-6">
                <div class="rounded-lg border p-6">

                    <h3>Read</h3>
                    <div>
                        <p>
                            <a class=" text-indigo-600" href="https://bitclout.com/u/bitstoday">@BitsToday</a>: A nightly digest of everything happening in the world of clout.
                        </p>
                        <p>
                            <a class=" text-indigo-600" href="https://bitclout.com/u/clouttrends">@clouttrends</a>: CloudTrends is your weekly must read for BitClout trends.
                        </p>
                        <p>
                            <a class=" text-indigo-600" href="https://bitclout.com/u/renatavc">@renatavc</a>: <a class=" text-indigo-600" href="https://www.notion.so/The-10-Principles-of-BitClout-7815dc6426034f11893e7537c9dffbbe">The 10 Principles of BitClout</a>
                        </p>
                        
                    </div>
                </div>

                <div class="rounded-lg border p-6 mt-6">

                    <h3>Listen</h3>

                    <div>
                        <p>
                            <a class=" text-indigo-600" href="https://bitclout.com/u/TheBitCult">@TheBitCult</a>: The BitCult Late Night Show, Hosted by <a class=" text-indigo-600" href="https://bitclout.com/u/connormitchell">@connormitchell</a> every night
                        </p>

                        <p>
                            <a class=" text-indigo-600" href="https://bitclout.com/u/cloutroom">@cloutroom</a>: Decentralized Conversation, Hosted by <a class=" text-indigo-600" href="https://bitclout.com/u/maz">@maz</a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="border-b border-gray-800 mt-20">
                <h2>FAQ</h2>
            </div>

            <h4>What is a Creator Coin and how do I use them?</h4>
            <p>
                Your favorite creator has a coin you can buy or sell. The price goes up as more people buy. You can have your own coin too.
            </p>

            <h4>What is the Founder Reward and how should I set it?</h4>

            <p>
                The default value is 100% and this prevents anyone buying your coin before you have the chance to. The recommended value is 10% but you can experiment or set as you desire.
            </p>

            <p>
                The Core team has <a class=" text-indigo-600"  href="https://docs.bitclout.com/faq/bitclout-faq">published answers</a> to community submitted questions.
            </p>

            <p>
                A full glossary of terms can be found at <a class=" text-indigo-600"  href="https://bitcloutglossary.com/">BitCloutGlossary</a>
            </p>



        </div>
    </div>    
</section>


@endsection
