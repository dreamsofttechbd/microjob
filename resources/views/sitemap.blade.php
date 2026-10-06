<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Homepage -->
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Static Pages -->
    <url>
        <loc>{{ url('/about_us') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/privacy_policy') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/terms_conditions') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

   <url>
        <loc>{{ url('/microjob_marketplace') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/deal_marketplace') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>

    <!-- category -->
      @foreach($categories as $category)
        <url>
            <loc>{{ url('/jobs/category/' . $category->slug) }}</loc>
            <lastmod>{{ optional($category->updated_at)->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach

    @foreach($allJobs as $jobs)
        <url>
            <loc>{{ url('/user/job-details/' . $jobs->code) }}</loc>
            <lastmod>{{ optional($jobs->updated_at)->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.7</priority>
        </url>
     @endforeach
</urlset>