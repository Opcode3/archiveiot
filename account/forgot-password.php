<?php
$path = "/archiveiot";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - ArchiveIoT</title>
    <link rel="stylesheet" href="../static/styles/sign.css" />
</head>

<body>
    <main>
        <section>
            <div class="overflow">
                <a href="<?php echo $path . "/"; ?>" id="logo">
                    <svg width="170px" viewBox="0 0 93 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.296 12.928C0.816 12.742 0.672 12.412 0.864 11.938L5.148 1.39C5.328 0.993999 5.61 0.795999 5.994 0.795999H6.03C6.42 0.814 6.684 1.012 6.822 1.39L11.178 11.938C11.37 12.412 11.232 12.742 10.764 12.928C10.29 13.114 9.96 12.976 9.774 12.514L8.802 10.156H3.195L2.268 12.514C2.082 12.982 1.758 13.12 1.296 12.928ZM3.789 8.644H8.181L5.94 3.19L3.789 8.644ZM14.4405 13C13.9365 13 13.6845 12.748 13.6845 12.244V4.63C13.6845 4.126 13.9365 3.874 14.4405 3.874C14.9445 3.874 15.1965 4.126 15.1965 4.63V5.332C15.5505 4.852 16.0005 4.489 16.5465 4.243C17.0985 3.997 17.7285 3.874 18.4365 3.874C18.9405 3.874 19.1925 4.126 19.1925 4.63C19.1925 5.134 18.9405 5.386 18.4365 5.386C17.3985 5.386 16.6065 5.578 16.0605 5.962C15.5145 6.346 15.2265 6.853 15.1965 7.483V12.244C15.1965 12.748 14.9445 13 14.4405 13ZM24.1106 13C22.9166 13 22.0286 12.712 21.4466 12.136C20.8706 11.554 20.5826 10.666 20.5826 9.472V7.384C20.5826 6.184 20.8676 5.296 21.4376 4.72C22.0136 4.144 22.9046 3.862 24.1106 3.874H25.5866C26.4806 3.874 27.1826 4.024 27.6926 4.324C28.2086 4.624 28.5386 5.086 28.6826 5.71C28.7366 5.962 28.6916 6.157 28.5476 6.295C28.4096 6.433 28.2086 6.502 27.9446 6.502C27.7106 6.502 27.5396 6.442 27.4316 6.322C27.3236 6.202 27.2246 6.034 27.1346 5.818C27.0446 5.656 26.8796 5.545 26.6396 5.485C26.3996 5.419 26.0486 5.386 25.5866 5.386H24.1106C23.3366 5.374 22.8056 5.509 22.5176 5.791C22.2356 6.067 22.0946 6.598 22.0946 7.384V9.472C22.0946 10.252 22.2356 10.783 22.5176 11.065C22.8056 11.347 23.3366 11.488 24.1106 11.488H25.5866C26.0486 11.488 26.3996 11.458 26.6396 11.398C26.8796 11.332 27.0446 11.218 27.1346 11.056C27.2246 10.828 27.3236 10.657 27.4316 10.543C27.5456 10.429 27.7226 10.372 27.9626 10.372C28.2146 10.372 28.4096 10.441 28.5476 10.579C28.6916 10.717 28.7366 10.912 28.6826 11.164C28.5386 11.782 28.2086 12.244 27.6926 12.55C27.1826 12.85 26.4806 13 25.5866 13H24.1106ZM32.5811 13C32.0771 13 31.8251 12.748 31.8251 12.244V1.084C31.8251 0.579999 32.0771 0.327999 32.5811 0.327999C33.0851 0.327999 33.3371 0.579999 33.3371 1.084V4.927C33.9731 4.225 34.9091 3.874 36.1451 3.874H36.6491C37.8491 3.874 38.7371 4.162 39.3131 4.738C39.8891 5.314 40.1771 6.202 40.1771 7.402V12.244C40.1771 12.748 39.9251 13 39.4211 13C38.9171 13 38.6651 12.748 38.6651 12.244V7.402C38.6651 6.616 38.5211 6.085 38.2331 5.809C37.9511 5.527 37.4231 5.386 36.6491 5.386H36.1451C35.4251 5.386 34.7981 5.47 34.2641 5.638C33.7301 5.8 33.4211 6.058 33.3371 6.412V12.244C33.3371 12.748 33.0851 13 32.5811 13ZM44.2471 2.398C43.6771 2.398 43.3921 2.11 43.3921 1.534V1.003C43.3921 0.439 43.6771 0.157 44.2471 0.157H44.7691C45.3151 0.157 45.5881 0.439 45.5881 1.003V1.534C45.5881 2.11 45.3151 2.398 44.7691 2.398H44.2471ZM44.4991 13C43.9951 13 43.7431 12.748 43.7431 12.244V4.63C43.7431 4.126 43.9951 3.874 44.4991 3.874C45.0031 3.874 45.2551 4.126 45.2551 4.63V12.244C45.2551 12.748 45.0031 13 44.4991 13ZM52.563 12.442C52.485 12.628 52.374 12.769 52.23 12.865C52.092 12.955 51.915 13 51.699 13C51.321 13 51.051 12.802 50.889 12.406L47.829 4.954C47.619 4.474 47.751 4.144 48.225 3.964C48.675 3.754 49.005 3.886 49.215 4.36L52.077 11.344H51.375L54.507 4.324C54.609 4.126 54.747 3.991 54.921 3.919C55.101 3.847 55.299 3.862 55.515 3.964C55.959 4.174 56.079 4.51 55.875 4.972L52.563 12.442ZM59.202 9.058V9.49C59.202 10.264 59.343 10.792 59.625 11.074C59.907 11.35 60.438 11.488 61.218 11.488H62.694C63.306 11.488 63.759 11.431 64.053 11.317C64.347 11.203 64.542 11.002 64.638 10.714C64.704 10.486 64.794 10.312 64.908 10.192C65.028 10.072 65.208 10.012 65.448 10.012C65.7 10.012 65.892 10.078 66.024 10.21C66.156 10.342 66.198 10.534 66.15 10.786C66.018 11.53 65.664 12.085 65.088 12.451C64.512 12.817 63.714 13 62.694 13H61.218C60.024 13 59.136 12.712 58.554 12.136C57.978 11.56 57.69 10.678 57.69 9.49V7.402C57.69 6.184 57.978 5.29 58.554 4.72C59.136 4.144 60.024 3.862 61.218 3.874H62.694C63.894 3.874 64.782 4.162 65.358 4.738C65.934 5.308 66.222 6.196 66.222 7.402V8.302C66.222 8.806 65.97 9.058 65.466 9.058H59.202ZM61.218 5.386C60.438 5.374 59.907 5.509 59.625 5.791C59.343 6.073 59.202 6.61 59.202 7.402V7.546H64.71V7.402C64.71 6.616 64.569 6.085 64.287 5.809C64.011 5.527 63.48 5.386 62.694 5.386H61.218ZM70.2862 13C70.0282 13 69.8362 12.94 69.7102 12.82C69.5902 12.694 69.5302 12.502 69.5302 12.244V1.57C69.5302 1.306 69.5902 1.114 69.7102 0.993999C69.8362 0.873999 70.0282 0.813999 70.2862 0.813999C70.5502 0.813999 70.7422 0.873999 70.8622 0.993999C70.9822 1.114 71.0422 1.306 71.0422 1.57V12.244C71.0422 12.502 70.9822 12.694 70.8622 12.82C70.7422 12.94 70.5502 13 70.2862 13ZM77.8821 13C76.6881 13 75.8001 12.712 75.2181 12.136C74.6421 11.56 74.3541 10.678 74.3541 9.49V7.402C74.3541 6.196 74.6421 5.308 75.2181 4.738C75.8001 4.162 76.6881 3.874 77.8821 3.874H79.3581C80.5581 3.874 81.4461 4.162 82.0221 4.738C82.5981 5.314 82.8861 6.202 82.8861 7.402V9.472C82.8861 10.666 82.5981 11.554 82.0221 12.136C81.4461 12.712 80.5581 13 79.3581 13H77.8821ZM75.8661 9.49C75.8661 10.264 76.0071 10.792 76.2891 11.074C76.5711 11.35 77.1021 11.488 77.8821 11.488H79.3581C80.1441 11.488 80.6751 11.347 80.9511 11.065C81.2331 10.783 81.3741 10.252 81.3741 9.472V7.402C81.3741 6.616 81.2331 6.085 80.9511 5.809C80.6751 5.527 80.1441 5.386 79.3581 5.386H77.8821C77.3601 5.386 76.9521 5.446 76.6581 5.566C76.3701 5.68 76.1661 5.884 76.0461 6.178C75.9261 6.466 75.8661 6.874 75.8661 7.402V9.49ZM87.8619 13C87.6099 13 87.4209 12.937 87.2949 12.811C87.1689 12.685 87.1059 12.496 87.1059 12.244V2.326H83.6139C83.3619 2.326 83.1729 2.263 83.0469 2.137C82.9209 2.011 82.8579 1.822 82.8579 1.57C82.8579 1.318 82.9209 1.129 83.0469 1.003C83.1729 0.876999 83.3619 0.813999 83.6139 0.813999H92.1099C92.3619 0.813999 92.5509 0.876999 92.6769 1.003C92.8029 1.129 92.8659 1.318 92.8659 1.57C92.8659 1.822 92.8029 2.011 92.6769 2.137C92.5509 2.263 92.3619 2.326 92.1099 2.326H88.6179V12.244C88.6179 12.484 88.5519 12.67 88.4199 12.802C88.2939 12.934 88.1079 13 87.8619 13Z" fill="white" />
                    </svg>
                </a>
                <div id="bg-tag">
                    <h2>Everything you need, <br>
                        to make anything you want.</h2>
                    <p>Dozens of creative tools to ideate, generate and edit content like never before.</p>
                </div>
            </div>

        </section>
        <section>
            <a href="<?php echo $path . "/"; ?>" id="inlogo">
                <svg viewBox="0 0 93 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.296 12.928C0.816 12.742 0.672 12.412 0.864 11.938L5.148 1.39C5.328 0.993999 5.61 0.795999 5.994 0.795999H6.03C6.42 0.814 6.684 1.012 6.822 1.39L11.178 11.938C11.37 12.412 11.232 12.742 10.764 12.928C10.29 13.114 9.96 12.976 9.774 12.514L8.802 10.156H3.195L2.268 12.514C2.082 12.982 1.758 13.12 1.296 12.928ZM3.789 8.644H8.181L5.94 3.19L3.789 8.644ZM14.4405 13C13.9365 13 13.6845 12.748 13.6845 12.244V4.63C13.6845 4.126 13.9365 3.874 14.4405 3.874C14.9445 3.874 15.1965 4.126 15.1965 4.63V5.332C15.5505 4.852 16.0005 4.489 16.5465 4.243C17.0985 3.997 17.7285 3.874 18.4365 3.874C18.9405 3.874 19.1925 4.126 19.1925 4.63C19.1925 5.134 18.9405 5.386 18.4365 5.386C17.3985 5.386 16.6065 5.578 16.0605 5.962C15.5145 6.346 15.2265 6.853 15.1965 7.483V12.244C15.1965 12.748 14.9445 13 14.4405 13ZM24.1106 13C22.9166 13 22.0286 12.712 21.4466 12.136C20.8706 11.554 20.5826 10.666 20.5826 9.472V7.384C20.5826 6.184 20.8676 5.296 21.4376 4.72C22.0136 4.144 22.9046 3.862 24.1106 3.874H25.5866C26.4806 3.874 27.1826 4.024 27.6926 4.324C28.2086 4.624 28.5386 5.086 28.6826 5.71C28.7366 5.962 28.6916 6.157 28.5476 6.295C28.4096 6.433 28.2086 6.502 27.9446 6.502C27.7106 6.502 27.5396 6.442 27.4316 6.322C27.3236 6.202 27.2246 6.034 27.1346 5.818C27.0446 5.656 26.8796 5.545 26.6396 5.485C26.3996 5.419 26.0486 5.386 25.5866 5.386H24.1106C23.3366 5.374 22.8056 5.509 22.5176 5.791C22.2356 6.067 22.0946 6.598 22.0946 7.384V9.472C22.0946 10.252 22.2356 10.783 22.5176 11.065C22.8056 11.347 23.3366 11.488 24.1106 11.488H25.5866C26.0486 11.488 26.3996 11.458 26.6396 11.398C26.8796 11.332 27.0446 11.218 27.1346 11.056C27.2246 10.828 27.3236 10.657 27.4316 10.543C27.5456 10.429 27.7226 10.372 27.9626 10.372C28.2146 10.372 28.4096 10.441 28.5476 10.579C28.6916 10.717 28.7366 10.912 28.6826 11.164C28.5386 11.782 28.2086 12.244 27.6926 12.55C27.1826 12.85 26.4806 13 25.5866 13H24.1106ZM32.5811 13C32.0771 13 31.8251 12.748 31.8251 12.244V1.084C31.8251 0.579999 32.0771 0.327999 32.5811 0.327999C33.0851 0.327999 33.3371 0.579999 33.3371 1.084V4.927C33.9731 4.225 34.9091 3.874 36.1451 3.874H36.6491C37.8491 3.874 38.7371 4.162 39.3131 4.738C39.8891 5.314 40.1771 6.202 40.1771 7.402V12.244C40.1771 12.748 39.9251 13 39.4211 13C38.9171 13 38.6651 12.748 38.6651 12.244V7.402C38.6651 6.616 38.5211 6.085 38.2331 5.809C37.9511 5.527 37.4231 5.386 36.6491 5.386H36.1451C35.4251 5.386 34.7981 5.47 34.2641 5.638C33.7301 5.8 33.4211 6.058 33.3371 6.412V12.244C33.3371 12.748 33.0851 13 32.5811 13ZM44.2471 2.398C43.6771 2.398 43.3921 2.11 43.3921 1.534V1.003C43.3921 0.439 43.6771 0.157 44.2471 0.157H44.7691C45.3151 0.157 45.5881 0.439 45.5881 1.003V1.534C45.5881 2.11 45.3151 2.398 44.7691 2.398H44.2471ZM44.4991 13C43.9951 13 43.7431 12.748 43.7431 12.244V4.63C43.7431 4.126 43.9951 3.874 44.4991 3.874C45.0031 3.874 45.2551 4.126 45.2551 4.63V12.244C45.2551 12.748 45.0031 13 44.4991 13ZM52.563 12.442C52.485 12.628 52.374 12.769 52.23 12.865C52.092 12.955 51.915 13 51.699 13C51.321 13 51.051 12.802 50.889 12.406L47.829 4.954C47.619 4.474 47.751 4.144 48.225 3.964C48.675 3.754 49.005 3.886 49.215 4.36L52.077 11.344H51.375L54.507 4.324C54.609 4.126 54.747 3.991 54.921 3.919C55.101 3.847 55.299 3.862 55.515 3.964C55.959 4.174 56.079 4.51 55.875 4.972L52.563 12.442ZM59.202 9.058V9.49C59.202 10.264 59.343 10.792 59.625 11.074C59.907 11.35 60.438 11.488 61.218 11.488H62.694C63.306 11.488 63.759 11.431 64.053 11.317C64.347 11.203 64.542 11.002 64.638 10.714C64.704 10.486 64.794 10.312 64.908 10.192C65.028 10.072 65.208 10.012 65.448 10.012C65.7 10.012 65.892 10.078 66.024 10.21C66.156 10.342 66.198 10.534 66.15 10.786C66.018 11.53 65.664 12.085 65.088 12.451C64.512 12.817 63.714 13 62.694 13H61.218C60.024 13 59.136 12.712 58.554 12.136C57.978 11.56 57.69 10.678 57.69 9.49V7.402C57.69 6.184 57.978 5.29 58.554 4.72C59.136 4.144 60.024 3.862 61.218 3.874H62.694C63.894 3.874 64.782 4.162 65.358 4.738C65.934 5.308 66.222 6.196 66.222 7.402V8.302C66.222 8.806 65.97 9.058 65.466 9.058H59.202ZM61.218 5.386C60.438 5.374 59.907 5.509 59.625 5.791C59.343 6.073 59.202 6.61 59.202 7.402V7.546H64.71V7.402C64.71 6.616 64.569 6.085 64.287 5.809C64.011 5.527 63.48 5.386 62.694 5.386H61.218ZM70.2862 13C70.0282 13 69.8362 12.94 69.7102 12.82C69.5902 12.694 69.5302 12.502 69.5302 12.244V1.57C69.5302 1.306 69.5902 1.114 69.7102 0.993999C69.8362 0.873999 70.0282 0.813999 70.2862 0.813999C70.5502 0.813999 70.7422 0.873999 70.8622 0.993999C70.9822 1.114 71.0422 1.306 71.0422 1.57V12.244C71.0422 12.502 70.9822 12.694 70.8622 12.82C70.7422 12.94 70.5502 13 70.2862 13ZM77.8821 13C76.6881 13 75.8001 12.712 75.2181 12.136C74.6421 11.56 74.3541 10.678 74.3541 9.49V7.402C74.3541 6.196 74.6421 5.308 75.2181 4.738C75.8001 4.162 76.6881 3.874 77.8821 3.874H79.3581C80.5581 3.874 81.4461 4.162 82.0221 4.738C82.5981 5.314 82.8861 6.202 82.8861 7.402V9.472C82.8861 10.666 82.5981 11.554 82.0221 12.136C81.4461 12.712 80.5581 13 79.3581 13H77.8821ZM75.8661 9.49C75.8661 10.264 76.0071 10.792 76.2891 11.074C76.5711 11.35 77.1021 11.488 77.8821 11.488H79.3581C80.1441 11.488 80.6751 11.347 80.9511 11.065C81.2331 10.783 81.3741 10.252 81.3741 9.472V7.402C81.3741 6.616 81.2331 6.085 80.9511 5.809C80.6751 5.527 80.1441 5.386 79.3581 5.386H77.8821C77.3601 5.386 76.9521 5.446 76.6581 5.566C76.3701 5.68 76.1661 5.884 76.0461 6.178C75.9261 6.466 75.8661 6.874 75.8661 7.402V9.49ZM87.8619 13C87.6099 13 87.4209 12.937 87.2949 12.811C87.1689 12.685 87.1059 12.496 87.1059 12.244V2.326H83.6139C83.3619 2.326 83.1729 2.263 83.0469 2.137C82.9209 2.011 82.8579 1.822 82.8579 1.57C82.8579 1.318 82.9209 1.129 83.0469 1.003C83.1729 0.876999 83.3619 0.813999 83.6139 0.813999H92.1099C92.3619 0.813999 92.5509 0.876999 92.6769 1.003C92.8029 1.129 92.8659 1.318 92.8659 1.57C92.8659 1.822 92.8029 2.011 92.6769 2.137C92.5509 2.263 92.3619 2.326 92.1099 2.326H88.6179V12.244C88.6179 12.484 88.5519 12.67 88.4199 12.802C88.2939 12.934 88.1079 13 87.8619 13Z" fill="white" />
                </svg>
            </a>
            <header>
                <h1>Password Recovery</h1>
                <p>Enter your email and we'll email you a password recovery code.</p>
            </header>
            <form action="" method="post">
                <div class="formControl">
                    <input type="text" name="email" id="email" placeholder="Your email">
                </div>
                <div class="formControl">
                    <button type="submit">Reset Password</button>
                </div>
            </form>
            <a href="./login.php" id="btnback">
                <svg data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"></path>
                </svg>

                <span>
                    Back
                </span>
            </a>
        </section>
    </main>
</body>

</html>