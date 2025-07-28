@extends('layouts.admin_main')

@section('content')
    <h2 class="mb-4">Banner Content Manager</h2>

    <!-- Input Form -->
    <div class="card shadow mb-5">
        <div class="card-body">
            <form action="{{ route('banner.update') }}" method="POST" id="bannerForm">
                @csrf
                @method('PUT')

                <!-- Short Heading -->
                <div class="mb-3">
                    <label>Short Heading</label>
                    <input type="text" name="short_heading" id="inputShortHeading" class="form-control"
                        value="{{ old('short_heading', $banner->short_heading ?? 'September 2025-26 Intake') }}">
                </div>

                <!-- Main Heading (Animated Lines) -->
                <div class="mb-3">
                    <label>Main Heading (Animated Text)</label>
                    <div id="animatedLinesContainer">
                        @foreach($mainHeadings as $line)
                            <div class="input-group mb-2">
                                <input type="text" name="main_heading[]" class="form-control animated-line" value="{{ $line }}">
                                <button type="button" class="btn btn-outline-danger remove-line">×</button>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" id="addLineBtn" class="btn btn-sm btn-secondary mt-2">+ Add Line</button>
                </div>

                <!-- Paragraph -->
                <div class="mb-3">
                    <label>Paragraph</label>
                    <textarea name="paragraph" id="inputParagraph" class="form-control" rows="3">{{ old('paragraph', $banner->paragraph ?? 'Explore the realm of opportunity...') }}</textarea>
                </div>

                <div class="d-flex gap-2">
                <button type="button" id="previewBtn" class="btn btn-info">
                    <i class="fas fa-eye me-1"></i> Preview
                </button>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save me-1"></i> Save
                </button>
            </div>
            </form>
        </div>
    </div>

    <!-- Live Preview -->
    <!-- Live Preview -->
<h4 class="mb-3">Live Preview</h4>
<div class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h2 class="hero-subtitle" id="previewShortHeading">
                {{ $shortHeading ?? '' }}
            </h2>
            <h1 class="hero-title text-white" id="previewMainHeading">
                @if(!empty($mainHeadings[0]))
                    {!! Purifier::clean($mainHeadings[0]) !!}  <!-- HTML render hoga -->
                @endif
            </h1>
            <div id="typed-strings" style="display:none;">
                @foreach($mainHeadings as $line)
                    {!! Purifier::clean($line) !!}
                @endforeach
            </div>
            <p class="hero-description" id="previewParagraph">
                {{ $paragraph ?? '' }}
            </p>
            <a href="#consultation" class="hero-btn">
                APPLY NOW <i class="fas fa-arrow-right"></i>
            </a>
            <div class="country-tags">
                <span class="country-tag">Canada</span>
                <span class="country-tag">Australia</span>
                <span class="country-tag">UK</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Typed.js for Animation Preview -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
    // Add/Remove Lines - NO CHANGES NEEDED (perfect as-is)
    document.getElementById('addLineBtn').addEventListener('click', function() {
        const container = document.getElementById('animatedLinesContainer');
        const newLine = `
        <div class="input-group mb-2">
            <input type="text" name="main_heading[]" class="form-control animated-line" placeholder="New line...">
            <button type="button" class="btn btn-outline-danger remove-line">×</button>
        </div>`;
        container.insertAdjacentHTML('beforeend', newLine);
    });

    // Remove Line - NO CHANGES NEEDED (perfect as-is)
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-line')) {
            e.target.closest('.input-group').remove();
        }
    });

    // FIXED Preview Functionality
    document.getElementById('previewBtn').addEventListener('click', function() {
        // 1. Safely update Short Heading
        const shortHeading = document.getElementById('inputShortHeading');
        const previewShort = document.getElementById('previewShortHeading');
        if (shortHeading && previewShort) {
            previewShort.textContent = shortHeading.value || "";
        }

        // 2. Safely update Paragraph
        const paragraph = document.getElementById('inputParagraph');
        const previewPara = document.getElementById('previewParagraph');
        if (paragraph && previewPara) {
            previewPara.textContent = paragraph.value || "";
        }

        // 3. SAFE Animated Text Handling
        const previewMain = document.getElementById('previewMainHeading');
        if (!previewMain) return;

        // Destroy previous instance if exists
        if (window.typedInstance) {
            window.typedInstance.destroy();
        }

        // Get all non-empty lines
        const lineInputs = document.querySelectorAll('.animated-line');
        const lines = [];
        
        lineInputs.forEach(input => {
            if (input.value && typeof input.value === 'string') {
                const trimmed = input.value.trim();
                if (trimmed) lines.push(trimmed);
            }
        });

        // Create new instance if we have valid lines
        if (lines.length > 0) {
            window.typedInstance = new Typed(previewMain, {
                strings: lines,
                typeSpeed: 50,
                backSpeed: 30,
                html: true,
                loop: true,
                showCursor: false
            });
        } else {
            previewMain.textContent = ""; // Show empty if no lines
        }
    });

    // Initialize on page load - SAFE VERSION
    document.addEventListener('DOMContentLoaded', function() {
        // Only trigger preview if elements exist
        const previewBtn = document.getElementById('previewBtn');
        if (previewBtn) {
            setTimeout(() => previewBtn.click(), 100); // Small delay for DOM readiness
        }
    });
</script>
@endsection
