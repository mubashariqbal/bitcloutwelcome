@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row">
        <div class="mt-8">
            <h1 id="intro-docs-template">Getting started with BitClout</h1>

            <p class="text-lg">
                BitClout is a new type of social network that mixes speculation and social media, and it’s built from the ground up as its own custom blockchain. Its architecture is similar to Bitcoin, only it can support complex social network data like posts, profiles, follows, speculation features, and much more at significantly higher throughput and scale. Like Bitcoin, BitClout is a fully open-source project and there is no company behind it-- it’s just coins and code.                
            </p>

            <div>
                <h2>Signing Up</h2>
            </div>

            <div class="grid md:grid-cols-2 space-x-6">
                <div>
                    <p>
                        <a href="https://bitclout.com" title="BitClout.com" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">BitClout.com</a>
                    </p>

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
                </div>
                <div>
                    <p>
                        <a href="https://joinbitclout.com" title="JoinBitClout" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">JoinBitClout.com</a>
                    </p>
                    <p>JoinBitClout has partnered with @giftclout to gift you $11.11 USD in $BitClout upon signup to help get you started</p>
                </div>
            </div>
        </div>

        {{-- <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 "> --}}
    </div>
</section>

<hr>

<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row">
        <div class="mt-8">
            <h2>How To Use</h2>

            <p>The functionality should be similar to other social media with these two additions:</p>

            <p>Creator Coins - A coin associated with every profile that can be bought and sold to support creators. The owner of the profile receives a percentage of all purchases in $BitClout($BCLT) - this is called the Founder Reward and is set by the user. </p>

            <p>Diamonds - This is a way to tip/gift your coin to another user for a post that you like.</p>

        </div>
    </div>    
</section>

<hr>

<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row">
        <div class="mt-8">
            <h2>Discover Creators</h2>

            <p>The first place to find creators, both individuals and projects, is on the right side of the BitClout.com UI when using the desktop browser or under “Buy Creator Coins” from the nav when using the mobile browser.</p>

            <p>Then next best place(and better for topics) is <a href="https://bitcloutfollow.com">BitCloutFollow</a></p>

            <p>
                <a href="https://bitcloutfollow.com">
                    <img src="/assets/img/bitcloutfollow.png" alt="">
                </a>
            </p>


        </div>
    </div>    
</section>

<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex mb-10">
        <div class="mt-8">
            <h2>Mobile Apps</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4><a href="https://bitclout.com/u/flickapp">FlickApp</a></h4>
                    <div>
                        <a href="https://bitclout.com/u/flickapp">
                            <img src="/assets/img/flick.png" alt="">
                        </a>
                    </div>
                </div>
                <div>
                    <h4><a href="https://bitclout.com/u/cloutfeed">CloutFeed</a></h4>
                    <div>
                        <a href="https://bitclout.com/u/cloutfeed">
                            <img src="/assets/img/cloutfeed.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div>
                <p><a href="https://bitclout.com/u/cloutieapp">Cloutie</a>: Coming soon!</p>
            </div>
        </div>
    </div>    
</section>

<hr>

<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10">
        <div class="mt-8">
            <h2>Learn More</h2>


            <h3>Read</h3>
            <p>
                <p>
                    <a href="https://bitclout.com/u/bitstoday">@BitsToday</a>: A nightly digest of everything happening in the world of clout.
                </p>
                <p>
                    <a href="https://bitclout.com/u/clouttrends">@clouttrends</a>: CloudTrends is your weekly must read for BitClout trends.
                </p>
                <p>
                    <a href="https://bitclout.com/u/renatavc">@renatavc</a>: <a href="https://www.notion.so/The-10-Principles-of-BitClout-7815dc6426034f11893e7537c9dffbbe">The 10 Principles of BitClout</a>
                </p>
                
            </p>

            <h3>Listen</h3>

            <p>
                <a href="https://bitclout.com/u/TheBitCult">@TheBitCult</a>: The BitCult Late Night Show, Hosted by <a href="https://bitclout.com/u/connormitchell">@connormitchell</a> every night
            </p>

            <p>
                <a href="https://bitclout.com/u/cloutroom">@cloutroom</a>: Decentralized Conversation, Hosted by <a href="https://bitclout.com/u/maz">@maz</a>
            </p>

        </div>
    </div>    
</section>

<hr>

<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10">
        <div class="mt-8">
            <h2>FAQ</h2>


            <h4>What is a Creator Coin and how do I use them?</h4>
            <p>
                Your favorite creator has a coin you can buy or sell. The price goes up as more people buy. You can have your own coin too.
            </p>

            <h4>What is the Founder Reward and how should I set it?</h4>

            <p>
                The default value is 100% and this prevents anyone buying your coin before you have the chance to. The recommended value is 10% but you can experiment or set as you desire.
            </p>

            <p>
                A full glossary of terms can be found at <a href="https://bitcloutglossary.com/">BitCloutGlossary</a>
            </p>

        </div>
    </div>    
</section>


@endsection
