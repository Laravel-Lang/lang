module.exports = {
    lang: 'en-US',
    title: 'Laravel Lang',
    description: 'Languages for Laravel applications',

    theme: '@vuepress/theme-default',
    themeConfig: {
        base: '/',

        logo: '/images/logo.png',

        repo: 'https://github.com/Laravel-Lang/lang',
        repoLabel: 'GitHub',
        docsRepo: 'https://github.com/Laravel-Lang/lang',
        docsBranch: 'master',
        docsDir: 'docs',

        editLink: true,

        navbar: [
            { text: 'Translations Status', link: '/status.md' },
            { text: '10.x', link: '/changelog/10.x.md' }
        ],

        sidebarDepth: 3,

        sidebar: [
            {
                text: 'Getting Started',
                collapsible: true,
                children: [
                    { text: 'Introduction', link: '/' },

                    {
                        text: 'Installation',
                        link: '/installation/',
                        collapsible: true,
                        children: [
                            '/installation/compatibility.md',
                            '/installation/managers.md',
                            '/installation/composer.md',
                            '/installation/github.md'
                        ]
                    },

                    { text: 'Basic Usage', link: '/usage.md' },
                    { text: 'Translations Status', link: '/status.md' },

                    {
                        text: 'Changelog',
                        link: '/changelog/index.md',
                        collapsible: true,
                        children: [
                            { text: '10.x', link: '/changelog/10.x.md' },
                            { text: '9.x', link: '/changelog/9.x.md' },
                            { text: '8.x', link: '/changelog/8.x.md' },
                            { text: '7.x', link: '/changelog/7.x.md' }
                        ]
                    }
                ]
            },
            {
                text: 'References',
                collapsible: true,
                children: [
                    { text: 'Referents', link: '/referents.md' },
                    { text: 'Code Of Conduct', link: '/code-of-conduct.md' },
                    { text: 'Contributing To Dev', link: '/contributing-to-dev.md' }
                ]
            }
        ]
    }
};
