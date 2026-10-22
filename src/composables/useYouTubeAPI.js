let YouTubeApiPromise = null

export function useYouTubeApi() {

    const loadYouTubeApi = () => {
        if (YouTubeApiPromise) return YouTubeApiPromise

        YouTubeApiPromise = new Promise((resolve, reject) => {

            // Check if YouTube's Api is already loaded, if so, resolve the promise immediately

            if (window.YT && window.YT.Player) {
                resolve(window.YT)
                return
            }

            // Place for YouTube to callback to
            // NOTE: 'onYouTubeIframeAPIReady' MUST be exactly this name, as it is called by YouTube's Api script when it is loaded

            window.onYouTubeIframeAPIReady = () => {
                resolve(window.YT)
            }

            // Add YouTube's Api script to the page
            const YouTubeScript = document.createElement('script')

            YouTubeScript.src = 'https://www.youtube.com/iframe_api'

            // If the scripts fails to load, reject with error message
            YouTubeScript.onerror = () => {
                YouTubeApiPromise = null
                reject(new Error('YouTube Api failed to load. Possible blocked by an adblocker.'))
            }

            document.head.appendChild(YouTubeScript)
        })

        return YouTubeApiPromise
    }

    return {
        loadYouTubeApi
    }

}