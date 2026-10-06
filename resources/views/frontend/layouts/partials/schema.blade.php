
 <!-- Advertising Agency Schema -->
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@graph": [
    {
      "@@type": "Organization",
      "@@id": "https://jobfixs.com/#organization",
      "name": "jobfixs",
      "url": "{{ url()->current() }}",
      "logo": {
        "@@type": "ImageObject",
        "url": "https://jobfixs.com/assets/images/logo.png",
        "image": "https://jobfixs.com/assets/images/og-image.jpg"
      },
      "description": "JobFixs is the best freelancer online jobs marketplace to post jobs, find freelance work, hire skilled workers, and grow your career.",
        "sameAs": [
        "https://www.facebook.com/jobfixss",
        "https://www.instagram.com/jobfixss"
        ]
    },
    {
      "@@type": "WebSite",
      "@@id": "https://jobfixs.com/#website",
      "url": "{{ url()->current() }}",
      "name": "jobfixs",
      "publisher": {
        "@@id": "https://jobfixs.com/#organization"
      }
    }
  ]
}
</script>
 <!-- end Advertising Agency Schema -->