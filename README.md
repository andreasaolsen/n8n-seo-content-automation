# n8n SEO Content Automation
Automated SEO content publishing workflow built with n8n, OpenAI and WordPress.

## Overview

The workflow takes an unpublished software tool from Google Sheets and turns it into a structured SEO-focused article.

It uses AI to generate the article and supporting images, then publishes the content to WordPress and updates the SEO metadata.

## Workflow

Google Sheets ↓<br>
OpenAI ↓<br>
Article + SEO metadata ↓<br>
AI-generated images ↓<br>
WordPress ↓<br>
SEO metadata ↓<br>
Google Sheets

### What it does

- Reads the next unpublished tool from Google Sheets
- Generates a structured software guide with OpenAI
- Generates a featured image and supporting article image
- Uploads the images to WordPress
- Inserts the article image into the content
- Publishes the article through the WordPress REST API
- Updates the SEO metadata
- Marks the tool as published in Google Sheets

## Tools

- **n8n** — workflow automation
- **OpenAI** — content and image generation
- **Google Sheets** — content queue and publishing status
- **WordPress** — content management and publishing

## Workflow File

The sanitized n8n workflow is available here:

[`workflow/seo-content-automation.json`](workflow/seo-content-automation.json)

## Security

This repository contains a sanitized version of the workflow.

Credentials, API keys and private configuration have been removed or replaced with placeholders.

The workflow is provided for demonstration and portfolio purposes.
