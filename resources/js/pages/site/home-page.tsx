import { Head, Link } from '@inertiajs/react';
import PageLayout from '../../layouts/page-layout';
import { Article } from '../../types/article';
import { Award } from '../../types/award';
import { Event } from '../../types/event';
import { HeroSlide } from '../../types/hero_slide';
import { Notice } from '../../types/notice';
import { Page } from '../../types/page';
import { Project } from '../../types/project';
import { Service } from '../../types/service';
import { Team } from '../../types/team';
import { Testimonial } from '../../types/testimonial';
import ImageWrappedContentSection from './components/image-wrapped-content-section';
import RenderSectionContent from './components/render-section-content';
import SectionGallery from './components/section-gallery';
import SectionHeader from './components/section-header';

interface HomePageProps {
    page: Page;
    heroSlides: HeroSlide[];
    services: Service[];
    teams: Team[];
    testimonials: Testimonial[];
    awards: Award[];
    notices: Notice[];
    events: Event[];
    articles: Article[];
    projects: Project[];
}

const HomePage: React.FC<HomePageProps> = ({ page, heroSlides, services, teams, testimonials, awards, notices, events, articles, projects }) => {
    const pageUrl = typeof window !== 'undefined' ? window.location.href : '';
    const imageUrl = ''; // Replace with default OG image if needed
    const metaTitle = page?.meta_title || 'YourSite';
    const metaDescription = page?.meta_description || 'YourSite';
    const metaKeywords = page?.meta_keywords || 'YourSite';

    console.log(page);

    return (
        <>
            <Head title={page.title}>
                {/* Basic SEO */}
                <meta name="title" content={metaTitle} />
                <meta name="description" content={metaDescription} />
                <meta name="keywords" content={`${metaKeywords}, articles, blog`} />
                <meta name="author" content="YourSite" />

                {/* Open Graph */}
                <meta property="og:type" content="website" />
                <meta property="og:title" content={page.title} />
                <meta property="og:description" content={metaDescription} />
                <meta property="og:image" content={imageUrl} />
                <meta property="og:url" content={pageUrl} />
                <meta property="og:site_name" content="YourSite" />

                {/* Twitter */}
                <meta name="twitter:card" content="summary_large_image" />
                <meta name="twitter:title" content={page.title} />
                <meta name="twitter:description" content={metaDescription} />
                <meta name="twitter:image" content={imageUrl} />

                <link rel="canonical" href={pageUrl} />
            </Head>

            <PageLayout>
                {/* Hero Section */}
                <section className="relative w-full">
                    {/* Desktop */}
                    <div
                        className="relative flex min-h-screen items-center justify-between"
                        style={{
                            backgroundImage: 'url("./images/hero_5.jpg")',
                            backgroundSize: 'cover',
                            backgroundPosition: 'center',
                            backgroundRepeat: 'no-repeat',
                        }}
                    >
                        {/* Overlay */}
                        <div className="absolute inset-0 bg-black/50"></div>

                        {/* You can adjust opacity with /30, /40, /70 etc. */}

                        {/* Content */}
                        <div className="mx-auto mt-16 flex w-6xl items-center bg-card/80 backdrop-saturate-150">
                            <div className="md:w-9xl z-10 w-full px-6 py-10 text-left md:px-28">
                                <h1 className="text-4xl font-semibold text-card-foreground md:text-5xl">
                                    <span className="text-2xl md:text-7xl">{page.sections[0]?.heading}</span>
                                </h1>
                                <p className="mt-6 text-sm leading-relaxed text-card-foreground md:text-lg">{page.sections[0]?.sub_heading}</p>
                                <div className="mt-16">
                                    <Link href={page.sections[0]?.button_link || ''}>
                                        <button className="flex items-center gap-3 rounded-xl bg-primary px-6 py-2 font-semibold uppercase shadow-md hover:bg-yellow-500 hover:shadow-lg">
                                            {page.sections[0]?.button_text}
                                        </button>
                                    </Link>
                                </div>
                            </div>
                            <img src="/images/bird.gif" alt="Hero Image" className="z-20 h-96 w-96 object-cover" />
                        </div>
                    </div>
                </section>

                <div className="bg-black/40 py-16">
                    <div className="mx-auto w-full space-y-14 p-6 md:w-6xl">
                        <div className="">
                            <div key={page.sections[1]?.id} className="mb-30 w-full space-y-10 lg:w-6xl">
                                {/* Section Heading */}
                                <SectionHeader heading={page.sections[1]?.heading} sub_heading={page.sections[1]?.sub_heading} />

                                <ImageWrappedContentSection
                                    mediaUrl={page.sections[1]?.media?.url}
                                    mimeType={page.sections[1]?.media?.file_type}
                                    contentHtml={page.sections[1]?.content || ''}
                                    shape="octagon-left"
                                />

                                <div className="py-6">
                                    {page.sections[1]?.json_array && <RenderSectionContent jsonItems={page.sections[1]?.json_array} />}
                                </div>

                                {/* Gallery */}
                                {page.sections[1]?.gallery && page.sections[1]?.gallery.length > 0 && (
                                    <>
                                        <SectionGallery gallery={JSON.parse(page.sections[1]?.gallery)} />
                                    </>
                                )}

                                {/* Button */}
                                {page.sections[1]?.button_text && page.sections[1]?.button_link && (
                                    <div className="my-6 text-center">
                                        <a
                                            href={page.sections[1]?.button_link}
                                            className="inline-block rounded bg-blue-600 px-3 py-1 text-sm text-white hover:bg-blue-700"
                                        >
                                            {page.sections[1]?.button_text}
                                        </a>
                                    </div>
                                )}
                            </div>
                        </div>
                    </div>
                </div>
            </PageLayout>
        </>
    );
};

export default HomePage;
