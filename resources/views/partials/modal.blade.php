<div class="window-cover window-responsive" id={{ $id }}>
    <div class="modal modal-responsive">
        <div class="modal-top-section">
            <div class="image-container">
                <img src="{{ $image }}" alt="" class="modal-image">
            </div>
            <div class="content-section">
                <div class="about">
                    <h2 class="about-title {{ $aboutTitleClass }}">About</h2>
                    <div class="about-content">
                        {{ $aboutContent }}
                    </div>
                </div>
                <div class="project">
                    <h2 class="project-title {{ $projectTitleClass }}">The project</h2>
                    <div class="project-content">
                        {{ $projectContent }}
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-section">
            <button id="modalCloseButton" class="close-button">Close</button>

            <a href="{{ $link }}" target="_blank" class="link-button {{ $linkClass }}">Visit Site</a>
        </div>

    </div>
</div>


