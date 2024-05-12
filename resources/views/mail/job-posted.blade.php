<h2>{{ $job->title }}</h2>

<p>
    Congrats! Job is now live on our website.
</p>

<p>
    <a href="{{ url('/jobs/'.$job->id) }}">View Your Job Listing</a>
</p>
